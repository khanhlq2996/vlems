@extends('core/base::layouts.master')
@section('content')
<style type="text/css">
.nav-tabs {
    border-bottom: none;
}
</style>
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-boxed">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="true">User profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#changePassword"
                                role="tab" aria-controls="changePassword" aria-selected="false">Change password</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @include('core/acl::users.profile.tabs.profile-tab')
                        @include('core/acl::users.profile.tabs.change-password-tab')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop