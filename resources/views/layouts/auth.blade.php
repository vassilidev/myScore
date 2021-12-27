<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="@lang('app.')"/>
    <meta name="author" content="Vassili JOFFROY"/>
    <title>Login - SB Admin Pro</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}"/>
    <script data-search-pseudo-elements defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
            crossorigin="anonymous"></script>
</head>
<body class="bg-purple">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            @yield('content')
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        @include('layouts.auth.footer')
    </div>
</div>

@include('sweetalert::alert')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

@stack('js')
</body>
</html>
