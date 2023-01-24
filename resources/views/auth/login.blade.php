{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postlogin') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Signin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
{{-- @extends('layouts.app')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="/css/style3.css">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./assets/css/style3.css">
         
    <title>تسجيل الدخول</title>
    
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title" style="margin-right:125px;">تسجيل الدخول</span>

                <form method="POST" action="{{ route('postlogin') }}">
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="البريد الالكتروني" id="hospital_name" class="form-control" name="email" autofocus>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="كلمة المرور" id="password" class="form-control" name="password">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    {{-- <div class="input-field button">
                       <button type="submit"><input type="button" value="تسجيل الدخول"></button>
                    </div><br> --}}
                    <div class="input-field button cen">
                        <button type="submit"  class="btn">تسجيل الدخول</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./assets/js/script2.js"></script>

</body>
</html>