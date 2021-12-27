@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="card shadow-lg rounded-xl my-5">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <div class="h3 font-weight-light mb-3">
                                <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4>@lang('Create an Account')</h4>
                            <p class="small">@lang('Sign in using...')</p>
                            <a class="btn btn-icon btn-facebook mx-1" href="#!"><i
                                    class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                            <a class="btn btn-icon btn-github mx-1" href="#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                            <a class="btn btn-icon btn-google mx-1" href="#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                            <a class="btn btn-icon btn-twitter mx-1" href="#!"><i
                                    class="fab fa-twitter fa-fw fa-sm"></i></a>
                        </div>
                        <hr class="my-0"/>
                        <p class="text-center pt-3 small text-muted mb-4">
                            @lang('...or enter your information below.')
                        </p>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2 form-group">
                                        <label for="gender">@lang('Gender')</label>
                                        <select name="gender"
                                                id="gender"
                                                required
                                                class="form-control form-control-solid rounded-pill">
                                            <option value="">@lang('Select an option')</option>
                                            <option value="male">@lang('Male')</option>
                                            <option value="female">@lang('Female')</option>
                                            <option value="other">@lang('Other')</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5 form-group">
                                        <label for="name">@lang('Name')</label>
                                        <input class="form-control form-control-solid rounded-pill"
                                               type="text"
                                               id="name"
                                               name="name"
                                               required
                                               value="{{ old('name') }}"/>
                                    </div>
                                    <div class="col-lg-5 form-group">
                                        <label for="surname">@lang('Surname')</label>
                                        <input class="form-control form-control-solid rounded-pill"
                                               type="text"
                                               id="surname"
                                               name="surname"
                                               required
                                               value="{{ old('surname') }}"/>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="email">@lang('Email')</label>
                                        <input class="form-control form-control-solid rounded-pill"
                                               type="email"
                                               id="email"
                                               name="email"
                                               required
                                               value="{{ old('email') }}"/>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="date_of_birth">@lang('Date of birth')</label>
                                        <input class="form-control form-control-solid rounded-pill"
                                               type="date"
                                               id="date_of_birth"
                                               name="date_of_birth"
                                               required
                                               value="{{ old('date_of_birth') }}"/>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="password">@lang('Password')</label>
                                        <input class="form-control form-control-solid rounded-pill"
                                               type="password"
                                               id="password"
                                               required
                                               name="password"/>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="password_confirmation">@lang('Confirm Password')</label>
                                        <input class="form-control form-control-solid rounded-pill"
                                               type="password"
                                               id="password_confirmation"
                                               required
                                               name="password_confirmation"/>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" name="cgu" id="cgu" type="checkbox" required>
                                        <label class="form-check-label" for="cgu">
                                            @lang('I accept the') <a href="#!">@lang('terms & conditions')</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn rounded-pill btn-purple lift">
                                        @lang('Create Account')
                                    </button>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-body px-5 py-4">
                            <div class="small text-center">
                                @lang('Already registered?')
                                <a href="{{ route('register') }}">
                                    @lang('Sign In')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
