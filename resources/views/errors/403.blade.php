{{-- @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <title>Deposito Admin - 500 Error </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('main/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('images/auth-bg/bg-5.jpg')}})">

    <section class="error-page h-p100">
        <div class="container h-p100">
            <div class="row h-p100 align-items-center justify-content-center text-center">
                <div class="col-lg-7 col-md-10 col-12">
                    <div class="rounded30 p-50">
                        <img src="{{asset('images/403.png')}}" class="max-w-200" alt="" />
                        <h1>Uh-Ah</h1>
                        <h3>{{ __($exception->getMessage() ?: 'Forbidden')}}</h3>
                        <div class="my-30"><a href="{{route('home')}}" class="btn btn-info">Back to dashboard</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Vendor JS -->
    <script src="{{ asset('main/js/vendors.min.js') }}"></script>
    <script src="{{ asset('main/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>


</body>

</html>
