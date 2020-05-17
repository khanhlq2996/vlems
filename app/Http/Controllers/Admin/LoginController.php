<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Responses\BaseHttpResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Hash;
use Validator;
use Redirect;
use DB;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!Auth()->check()) {
            return view('admin.auth.login');
        }
        return redirect()->route('dashboard.index');
    }

    public function getRegisterAgency()
    {
        return view('admin.auth.register-agency');
    }

    public function getRegisterCompany()
    {
        return view('admin.auth.register-company');
    }

    public function postRegister(Request $request, BaseHttpResponse $response)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'representative' => 'required',
            'representative_phone' => 'required|required|regex:/(0)[0-9]{8}/',
            'phone' => 'required|regex:/(0)[0-9]{8}/',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $inputUser = $request->only('email', 'password', 'account_type');
            $inputUser['password'] = Hash::make($inputUser['password']);
            $user = User::create($inputUser);
            if(!empty($user->id)) {
                $inputUserDetail = $request->only('name', 'phone', 'address', 'representative', 'representative_phone', 'gender', 'account_type', 'indentity_number');
                $inputUserDetail['user_id'] = $user->id;
                $user = UserDetail::create($inputUserDetail);
            }
            
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            
            throw new Exception($e->getMessage());
        }

        return view('admin.auth.login', compact('user'));
    }

    public function postLogin(Request $request)
    {
        $validator = Validator()->make($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|string',
            'remember' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->route('form.login')
                ->withErrors($validator);
        }

        if (Auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            $user = Auth()->user();
            $success['token'] = $user->createToken('vlems')->accessToken;
            $success['name'] = $user->name;

            return redirect()->intended(url()->current());
        }
        return redirect()->route('form.login')->withErrors(['Failed' => 'Email or password is incorrect']);
    }

    public function logout()
    {
        if (Auth()->user()) {
            Auth()->logout();
            return redirect()->route('form.login');
        }

        return redirect()->route('dashboard.index');
    }
}
