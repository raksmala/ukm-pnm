@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Profil</h4>
        <p class="text-muted page-title-alt">Profil UKM {{ Auth()->user()->name }}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-lg-3">
        <div class="profile-detail card-box">
            <div>
                <img src="{{ secure_url('') }}/assets/images/logo/{{ Auth()->user()->foto }}" class="img-circle" alt="profile-image">
                <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Follow</button>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-8">
        <form method="post" class="well">
            <span class="input-icon icon-right">
                <textarea rows="2" class="form-control"
                            placeholder="Post a new message"></textarea>
            </span>
            <div class="p-t-10 pull-right">
                <a class="btn btn-sm btn-primary waves-effect waves-light">Send</a>
            </div>
            <ul class="nav nav-pills profile-pills m-t-10">
                <li>
                    <a href="#"><i class="fa fa-user"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-location-arrow"></i></a>
                </li>
                <li>
                    <a href="#"><i class=" fa fa-camera"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-smile-o"></i></a>
                </li>
            </ul>
        </form>
    </div>
</div>
@endsection