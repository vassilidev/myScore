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
                            <h4>@lang('Verify Email Address')</h4>
                        </div>
                        <hr class="my-0"/>
                        <p class="text-center h6 py-2">
                            @lang('To be able to use the application you must verify your email address.')
                            <br>
                            @lang('Click on the link you received by email to activate your account')
                        </p>
                        <div class="card-body">
                            <form action="{{ route('verification.send') }}" method="post">
                                @csrf
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <p class="small">@lang("You haven't received the email?")</p>
                                    <button type="submit" class="btn btn-primary">
                                        @lang('Resend a new email')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
