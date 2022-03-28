@extends('layouts.auth')


@section('content')
<div class="app-contant">
    <div class="bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                    <div class="d-flex align-items-center h-100-vh">
                        <div class="login p-50">
                            <img class="w-90" src="{{asset('panel/img/logo-dark.png')}}" alt="">
                            <p>Welcome back, please login to your account.</p>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}" class="mt-3 mt-sm-5">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input class="form-control" id="email" type="email" name="email" placeholder="email" :value="old('email')" required autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input class="form-control" id="password" type="password" name="password" placeholder="password" required autocomplete="current-password" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-block d-sm-flex  align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Remember Me
                                                </label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="ml-auto">{{ __('Forgot password?') }}</a>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button class="btn btn-primary text-uppercase">
                                            Login
                                        </button>
                                    </div>
                                    <div class="col-12  mt-3">
                                        <p>Don't have an account ?<a href="{{route('register')}}"> Register</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                    <div class="row align-items-center h-100">
                        <div class="col-7 mx-auto ">
                            <img class="img-fluid" src="{{asset('panel/img/bg/login.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection