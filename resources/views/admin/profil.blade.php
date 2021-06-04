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
            <div style="text-align: center;">
                <div class="row">
                    <img src="{{ secure_url('') }}/assets/images/logo/{{ Auth()->user()->foto }}" class="img-circle" alt="profile-image">
                    <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Follow</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-8">
        <div class="card-box">
            <div class="comment">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Adam Jansen</a><span>about 2 minuts ago</span>
                        </div>
                        Story based around the idea of time lapse, animation to post soon!

                        <div class="m-t-15">
                            <a href="">
                                <img src="assets/images/small/img1.jpg" class="thumb-md">
                            </a>
                            <a href="">
                                <img src="assets/images/small/img2.jpg" class="thumb-md">
                            </a>
                            <a href="">
                                <img src="assets/images/small/img3.jpg" class="thumb-md">
                            </a>
                        </div>
                    </div>

                    <div class="comment-footer">
                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                        <a href="#">Reply</a>
                    </div>
                </div>

                <div class="comment">
                    <img src="assets/images/users/avatar-2.jpg" alt="" class="comment-avatar">
                    <div class="comment-body">
                        <div class="comment-text">
                            <div class="comment-header">
                                <a href="#" title="">John Smith</a><span>about 1 hour ago</span>
                            </div>
                            Wow impressive!
                        </div>
                        <div class="comment-footer">
                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                            <a href="#">Reply</a>
                        </div>
                    </div>
                </div>

                <div class="comment">
                    <img src="assets/images/users/avatar-3.jpg" alt=""
                            class="comment-avatar">
                    <div class="comment-body">
                        <div class="comment-text">
                            <div class="comment-header">
                                <a href="#" title="">Matt
                                    Cheuvront</a><span>about 2 hours ago</span>
                            </div>
                            Wow, that is really nice.
                        </div>
                        <div class="comment-footer">
                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="comment">
                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">Stephanie
                                        Walter</a><span>3 hours ago</span>
                                </div>
                                Nice work, makes me think of The Money Pit.
                            </div>
                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Kim Ryder</a><span>about 4 hours ago</span>
                        </div>
                        i'm in the middle of a timelapse animation myself! (Very different
                        though.) Awesome stuff.
                    </div>
                    <div class="comment-footer">
                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                        <a href="#">Reply</a>
                    </div>
                </div>
            </div>
            <div class="comment">
                <img src="assets/images/users/avatar-7.jpg" alt="" class="comment-avatar">
                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Nicolai Larson</a><span>10 hours ago</span>
                        </div>
                        the parallax is a little odd but O.o that house build is awesome!!
                    </div>
                    <div class="comment-footer">
                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                        <a href="#">Reply</a>
                    </div>
                </div>
            </div>
            <div class="comment">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                <div class="comment-body">
                    <div class="comment-text">
                        <div class="comment-header">
                            <a href="#" title="">Adam Jansen</a><span>about 2 minuts ago</span>
                        </div>
                        Story based around the idea of time lapse, animation to post soon!

                        <div class="m-t-15">
                            <a href="">
                                <img src="assets/images/small/img1.jpg" class="thumb-md">
                            </a>
                            <a href="">
                                <img src="assets/images/small/img2.jpg" class="thumb-md">
                            </a>
                            <a href="">
                                <img src="assets/images/small/img3.jpg" class="thumb-md">
                            </a>
                        </div>
                    </div>

                    <div class="comment-footer">
                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                        <a href="#">Reply</a>
                    </div>
                </div>

                <div class="comment">
                    <img src="assets/images/users/avatar-2.jpg" alt="" class="comment-avatar">
                    <div class="comment-body">
                        <div class="comment-text">
                            <div class="comment-header">
                                <a href="#" title="">John Smith</a><span>about 1 hour ago</span>
                            </div>
                            Wow impressive!
                        </div>
                        <div class="comment-footer">
                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                            <a href="#">Reply</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-t-30 text-center">
                <a href="" class="btn btn-default waves-effect waves-light btn-sm">Load More...</a>
            </div>
        </div>
    </div>
</div>
@endsection