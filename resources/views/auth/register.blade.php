@extends('layouts.auth')



@section('content')
<div class="app-contant">
    <div class="bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                    <div class="d-flex align-items-center h-100-vh">
                        <div class="register p-5">
                            <img class="w-90" src="{{asset('panel/img/logo-dark.png')}}" alt="">
                            <p class="mb-5">Welcome, Please create your account.</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input class="form-control" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input class="form-control" placeholder="Email" id="email" type="email" name="email" :value="old('email')" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input id="password" class="form-control" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Confirm Password</label>
                                            <input class="form-control" id="password_confirmation" placeholder="Password" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                    {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="terms" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                I accept terms & policy
                                            </label>
                                        </div>
                                    </div>
                                    @endif --}}
                                    
                                    <div class="col-12 mt-3">
                                        <button href="{{route('register')}}" class="btn btn-primary text-uppercase">Register</button>
                                    </div>
                                    <div class="col-12  mt-3">
                                        <p>Already have an account ?<a href="{{route('login')}}"> Login</a></p>
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