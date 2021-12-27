@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="card shadow-lg rounded-xl my-5">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <div class="h3 font-weight-light mb-3">
                                <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>@lang('Sign In')</h4>
                            <a class="btn btn-icon btn-facebook mx-1" href="#!"><i
                                    class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                            <a class="btn btn-icon btn-github mx-1" href="#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                            <a class="btn btn-icon btn-google mx-1" href="#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                            <a class="btn btn-icon btn-twitter mx-1" href="#!"><i
                                    class="fab fa-twitter fa-fw fa-sm"></i></a>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control form-control-solid rounded-pill"
                                           type="email"
                                           placeholder="@lang('Email address')"
                                           name="email"
                                           required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid rounded-pill"
                                           type="password"
                                           placeholder="@lang('Password')"
                                           name="password"
                                           required/>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="remember" type="checkbox"
                                               name="remember">
                                        <label class="custom-control-label text-black" for="remember">
                                            @lang('Remember me')
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                    <div class="form-group">
                                        <a class="small" href="auth-password-social.html">
                                            @lang('Forgot your password')
                                        </a>
                                    </div>
                                    <button type="submit" class="btn rounded-pill btn-purple lift">
                                        @lang('Login')
                                    </button>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-body px-5 py-4">
                            <div class="small text-center">
                                @lang('New user?')
                                <a href="{{ route('register') }}">
                                    @lang('Create an account')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
