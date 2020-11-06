@extends('layouts.admin_auth')

@section('page_title', 'Admin login')

@section('content')
<div class="col-md-4 col-10 box-shadow-2 p-0">
    <div class="card border-grey border-lighten-3 m-0">
        <div class="card-header border-0">
            <div class="card-title text-center">
                <div class="p-1">
                    <img src="{{asset('assets/admin')}}/images/logo/logo-dark.png" alt="branding logo">
                </div>
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                <span>Login with {{config('app.name')}}</span>
            </h6>
        </div>
        <div class="card-content">
            <div class="card-body">
                @include('layouts.partials.alerts')

                <form class="form-horizontal form-simple" action="{{route('admin.login')}}" method="POST" novalidate>
                    @csrf
                    <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" value="{{old('email')}}"
                            class="form-control form-control-lg input-lg @error('email') is-invalid @enderror"
                            name="email" placeholder="{{__('auth.your_email')}}">
                        <div class="form-control-position">
                            <i class="ft-user"></i>
                        </div>
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </fieldset>
                    <fieldset class="form-group position-relative has-icon-left">
                        <input type="password"
                            class="form-control form-control-lg input-lg @error('password') is-invalid @enderror"
                            name="password" placeholder="{{__('auth.enter_password')}}">
                        <div class="form-control-position">
                            <i class="la la-key"></i>
                        </div>
                        @error('password')<span class="text-danger">{{$message}}</span>@enderror
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                            <fieldset>
                                <input type="checkbox" id="remember-me" class="chk-remember" name='remember_me'>
                                <label for="remember-me">{{__('auth.remember_me')}}</label>
                            </fieldset>
                        </div>
                        {{-- <div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html"
                                class="card-link">Forgot
                                Password?</a></div> --}}
                    </div>
                    <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                        {{__('auth.login')}}</button>
                </form>
            </div>
        </div>
        {{-- <div class="card-footer">
            <div class="">
                <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover
                        password</a></p>
                <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="register-simple.html"
                        class="card-link">Sign Up</a></p>
            </div>
        </div> --}}
    </div>
</div>
@endsection