<div class="tab-pane fade" id="changePassword" role="tabpanel" aria-labelledby="change-password-tab">
    <div class="card-header"><strong>Change password</strong></div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-4" style='min-width: 320px;'>
                {!! Form::open(['route' => ['user.change-password', Auth()->user()->getKey()]]) !!}
                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="list-style: none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                <div class="form-group">
                    <label class="required">Old password</label>
                    {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                    {!! Form::input('password', 'old_password', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="required">New password</label>
                    {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                    {!! Form::input('password', 'new_password', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="required">Confirm password</label>
                    {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                    {!! Form::input('password', 'confirm_password', '', ['class' => 'form-control']) !!}
                </div>

                <button type="submit" class="btn btn-primary">Change</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>