<?php
namespace KAL\Acl\Http\Controllers;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManager;

use KAL\Base\Http\Controllers\BaseController;
use KAL\Base\Http\Responses\BaseHttpResponse;
use KAL\Base\Forms\FormBuilder;
use KAL\Acl\Forms\UserForm;
use KAL\Acl\Repositories\Interfaces\UserRepositoryInterface;
use KAL\Media\Repositories\Interfaces\MediaFileInterface;
use KAL\Media\Services\UploadsManager;
use KAL\Media\Services\ThumbnailService;
use KAL\Acl\Tables\UserTable;
use KAL\Acl\Http\Requests\CreateUserRequest;

use File;
use Hash;

class UserController extends BaseController
{
    /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    protected $userRepository;

    protected $fileRepository;


    public function __construct(
        UserRepositoryInterface $userRepository,
        MediaFileInterface $fileRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->fileRepository = $fileRepository;
    }

    public function index(UserTable $dataTable)
    {
        return $dataTable->renderTable();
    }

    public function create(FormBuilder $formBuilder)
    {
        return $formBuilder->create(UserForm::class)->renderForm();
    }

    public function store(CreateUserRequest $request, BaseHttpResponse $response)
    {
        $user = $this->userRepository->createOrUpdate($request->input());

        return $response
        ->setPreviousUrl(route('users.index'))
        ->setNextUrl(route('user.profile.view', $user->id))
        ->setMessage('Created user success');
    }

    public function getUserProfile($userId)
    {
        $user = $this->userRepository->findOrFail($userId);

        return view('core/acl::users.profile.detail', compact('user'));
    }

    public function postUpdateUserProfile($userId, Request $request, BaseHttpResponse $response)
    {
        $user = $this->userRepository->findById($userId);

        $currentUser = $request->user();

        if ($currentUser->getKey() === $user->id) {
            $user->fill($request->input());
            $user->completed_profile = 1;
            $this->userRepository->createOrUpdate($user);

            return $response->setMessage('Update profile success');
        }

        return $response->setError()->setMessage('Cannot update profile')->withInput();
    }

    public function postChangeUserPassword($userId, Request $request, BaseHttpResponse $response)
    {
        if (!Hash::check($request->input('old_password'), $request->user()->getAuthPassword())) {
            return $response->setError()->setMessage('Old password is incorect')->withInput();
        }

        $user = $this->userRepository->findById($request->input('id', $request->user()->getKey()));

        $this->userRepository->update(['id' => $user->id], ['password' => Hash::make($request->input('new_password'))]);

        Auth()->logoutOtherDevices($request->input('new_password'));

        return $response->setMessage('Change password success');
    }

    public function postChangeProfileImage(
        Request $request,
        BaseHttpResponse $response,
        ImageManager $imageManager,
        UploadsManager $uploadManager,
        ThumbnailService $thumbnailService)
    {
        try {
            $fileUpload = $request->file('avatar_file');

            $fileExt = $fileUpload->getClientOriginalExtension();

            $folder_path = '/users';

            $fileName = $this->fileRepository->createName(File::name($fileUpload->getClientOriginalName()), 0);

            $fileName = $this->fileRepository->createSlug($fileName, $fileExt, $uploadManager->uploadPath($folder_path));

            $user = $this->userRepository->findById($request->user()->getKey());

            $image = $imageManager->make($request->file('avatar_file')->getRealPath());
            $avatarData = json_decode($request->input('avatar_data'));
            $image->crop((int)$avatarData->height, (int)$avatarData->width, (int) $avatarData->x, (int) $avatarData->y);
            $path = $folder_path . '/' . $fileName;

            $uploadManager->saveFile($path, $image->stream()->__toString());

            $readable_size = explode('x', config('media.sizes.thumb'));

            $thumbnailService
                ->setImage($fileUpload->getRealPath())
                ->setSize($readable_size[0], $readable_size[1])
                ->setDestinationPath($folder_path)
                ->setFileName(File::name($fileName) . '-' . config('media.sizes.thumb') . '.' . $fileExt)
                ->save();

            $data = $uploadManager->fileDetails($path);

            $file = $this->fileRepository->getModel();
            $file->name = $fileName;
            $file->url = $data['url'];
            $file->size = $data['size'];
            $file->mime_type = $data['mime_type'];
            $file->folder_id = 0;
            $file->user_id = 0;
            $file->options = [];
            $file = $this->fileRepository->createOrUpdate($file);

            $this->fileRepository->forceDelete(['id' => $user->avatar_id]);

            $user->avatar_id = $file->id;

            $this->userRepository->createOrUpdate($user);

            return $response
                ->setMessage('Change profile image success')
                ->setData(['url' => url($data['url'])]);
        } catch (Exception $ex) {
            return $response
                ->setError()
                ->setMessage($ex->getMessage());
        }
    }

    public function deletes(Request $request, BaseHttpResponse $response) {
    }
}