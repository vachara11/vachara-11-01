@extends('layouts.admin.master')
@section('text')
        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @csrf
            <center>
                <img src="{{ asset('admin/images/logo.png') }}">
            </center>
            <span class="login100-form-title p-b-34 p-t-15">
                Register
            </span>

            <div class="wrap-input100 validate-input" data-validate = "กรุณากรอกชื่อ">
                <input class="input100" type="text" name="name" placeholder="Name">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "กรุณากรอกที่อยู่">
                <input class="input100" type="text" name="address" placeholder="Address">
                <span class="focus-input100" data-placeholder="&#xf2c6;	"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "กรุณากรอกอีเมล์">
                <input class="input100" type="eamil" name="email" placeholder="Email">
                <span class="focus-input100" data-placeholder="&#xf2da;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "กรุณากรอกเบอร์โทรศัพท์">
                <input class="input100" type="text" name="phone" placeholder="Phone">
                <span class="focus-input100" data-placeholder="&#xf2d7;	"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "กรุณากรอกชื่อผู้ใช้">
                <input class="input100" type="text" name="username" placeholder="Username">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกรหัสผ่าน">
                <input class="input100" type="password" name="password" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกรหัสผ่านอีกครั้ง">
                <input class="input100" type="password" name="password_confirmation" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Register
                </button>
            </div>

            <div class="text-center p-t-20">
                <a class="txt1" href="{{ url('/') }}">
                    go to home
                </a>
            </div>
            <div class="text-center p-t-10">
                <a class="txt1" href="{{ route('login') }}">
                    go to login
                </a>
            </div>

        </form>
@endsection
