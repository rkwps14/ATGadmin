@extends('layouts.master')
@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{url('/registration')}}">
                @csrf

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif                
                
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                        {{ $error }}
                </div>
                @endforeach
                

                <span class="login100-form-title p-b-32">
                <b>ATG</b> Registration
                </span>
                
                <span class="txt1 p-b-11">
                    Name
                </span>
                <div class="wrap-input100 validate-input m-b-36">
                    <input class="input100" type="text" name="name" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
                    Email
                </span>
                <div class="wrap-input100 validate-input m-b-36">
                    <input class="input100" type="email" name="email" >
                    <span class="focus-input100"></span>
                </div>
                
                <span class="txt1 p-b-11">
                    Password
                </span>
                <div class="wrap-input100 validate-input m-b-12">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
                    Re-Password
                </span>
                <div class="wrap-input100 validate-input m-b-12">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password_confirmation" >
                    <span class="focus-input100"></span>
                </div>
                
                <div class="flex-sb-m w-full p-b-48">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt3">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                
                <div class="container-login100-form-btn col-md-6">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>
                <div class="col-md-6 text-right">
                <a href="{{url('/')}}">Login here</a>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
	
@endsection