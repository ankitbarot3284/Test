@extends('layouts.app')


@section("page_title","Register Page")

@push("page_css")
 @include("layouts.page_css")
@endpush

@push("third_party_css")
    <style>
          .login_top{
            margin-top : 4%;
          }
    </style>
@endpush

@push('content.main')
        <div class="d-flex justify-content-center login_top" >
            <div class="wrapper">
                <div class="container">
                    <div class="register-box">
                        <div class="card card-outline card-primary">
                          <div class="card-header text-center">
                            <a href="{{ route('index') }}" class="h1"><b>Admin</b>LTE</a>
                          </div>
                          <div class="card-body">
                            <p class="login-box-msg">Register a new membership</p>

                            <form action="{{ route('register.perform') }}" method="post">
                            @csrf

                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                            </div>
                            </form>

                            {{-- <div class="social-auth-links text-center">
                              <a href="#" class="btn btn-block btn-primary">
                                <i class="fab fa-facebook mr-2"></i>
                                Sign up using Facebook
                              </a>
                              <a href="#" class="btn btn-block btn-danger">
                                <i class="fab fa-google-plus mr-2"></i>
                                Sign up using Google+
                              </a>
                            </div> --}}

                            <a href="{{ route('login.show') }}" class="text-center">I already have a membership</a>
                          </div>
                          <!-- /.form-box -->
                        </div><!-- /.card -->
                      </div>
                </div>
            </div>
        </div>

@endpush

@push("content.footer")
        @include("layouts.footer")
@endpush


@push("page_js")
    @include("layouts.page_js")
@endpush

