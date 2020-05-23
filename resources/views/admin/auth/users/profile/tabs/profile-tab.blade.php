<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="card-header"><strong>User profile</strong></div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 crop-avatar">
                <!-- Profile links -->
                <div class="block">
                    <div class="block mt-element-card mt-card-round mt-element-overlay">
                        <div class="thumbnail">
                            <div class="thumb">
                                <div class="profile-userpic mt-card-item">
                                    <div class="avatar-view mt-card-avatar mt-overlay-1">
                                        {{-- <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-fluid" alt="avatar"> --}}
                                        <img src="{{ $user->avatar_url }}" class="img-fluid" alt="avatar">
                                        <div class="mt-overlay">
                                            <ul class="mt-info">
                                                <li>
                                                    <a class="btn default btn-outline" href="javascript:;">
                                                        <i class="fa fa-image"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-card-content">
                                        <h5 class="mt-card-name">{{ $user->getFullName() }}</h5>
                                        <h6 class="mt-card-desc font-grey-mint">{{ $user->job_position }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog"
                    aria-labelledby="avatar-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form class="avatar-form" method="post" action="{{ route('user.change-profile-image') }}"
                                enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="avatar-modal-label"><i
                                            class="til_img"></i><strong>Change profile image</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="avatar-body">

                                        <!-- Upload image and data -->
                                        <div class="avatar-upload">
                                            <input class="avatar-src" name="avatar_src" type="hidden">
                                            <input class="avatar-data" name="avatar_data" type="hidden">
                                            <input type="hidden" name="user_id" value="{{ $user->id }}" />
                                            {!! Form::token() !!}
                                            <label for="avatarInput">New image</label>
                                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                        </div>

                                        <div class="loading" tabindex="-1" role="img" aria-label="Loading..."></div>

                                        <!-- Crop and preview -->
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="avatar-wrapper"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="avatar-preview preview-lg"></div>
                                                <div class="avatar-preview preview-md"></div>
                                                <div class="avatar-preview preview-sm"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary avatar-save" type="submit">Save</button>
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal -->
            </div>
            <div class="col-md-9">
                {!! Form::open(['route' => ['user.update-profile', Auth()->user()->getKey()], 'class' => 'login-form'])
                !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="required" for="firstName">First name</label>
                        <input type="text" name="first_name" class="form-control" id="firstName"
                            value="{{ $user->first_name }}" placeholder="First name">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="lastName">Last name</label>
                        <input type="text" name="last_name" class="form-control" id="lastName"
                            value="{{ $user->last_name }}" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="required" for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}"
                            disabled placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{ $user->phone }}"
                            placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{ $user->address }}"
                        placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jobPosition">Job position</label>
                        <input type="text" name="job_position" class="form-control" id="jobPosition"
                            value="{{ $user->job_position }}" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Birthdate</label>
                        <div class="input-group">
                            <input type="text" class="form-control date-picker" name="dob" value="{{ $user->dob }}"
                                autocomplete="off" placeholder="Date of birth">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        {!! Form::select('gender', array(null => '-- Choose --', 'Male', 'Female', 'Other'),
                        $user->gender, array('class' => 'form-control', 'id' => 'gender')) !!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="website"">Websie</label>
                        <input type=" text" name="website" class="form-control" id="website"
                            value="{{ $user->website }}" placeholder="https://www.your-site.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook"
                            value="{{ $user->facebook }}" placeholder="https://www.facebook.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="twitter">Twitter</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" value="{{ $user->twitter }}"
                            placeholder="https://www.twitter.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="skype">Skype</label>
                        <input type="text" name="skype" class="form-control" id="skype" value="{{ $user->skype }}"
                            placeholder="https://www.skype.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="youtube">Youtube</label>
                        <input type="text" name="youtube" class="form-control" id="youtube" value="{{ $user->youtube }}"
                            placeholder="https://www.youtube.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" class="form-control" placeholder="Something about you..."
                        rows='10'>{{ $user->about }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>