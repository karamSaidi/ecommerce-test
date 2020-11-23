@extends('layouts.site')

@section('breadcrumb')
<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/">
            <span itemprop="name">الصفحة الرئيسية</span>
        </a>
        <meta itemprop="position" content="1">
    </li>
</ol>
@endsection

@section('content')


<div class="container mb-4 pb-4">

    <form action="{{ route('register') }}" method="post">
        @csrf
        <section>

            <input type="hidden" name="back" value="my-account">

            <div class="form-group row no-gutters">
                <label class="col-md-2 form-control-label mb-xs-5 required">{{ __('Name') }} :</label>
                <div class="col-md-6">
                    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                        value="{{ old('name') }}" required autofocus>
                </div>

                <div class="col-md-4 form-control-comment right">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row no-gutters">
                <label class="col-md-2 form-control-label mb-xs-5 required">{{ __('user.mobile') }} :</label>
                <div class="col-md-6">
                    <input class="form-control @error('mobile') is-invalid @enderror" name="mobile" type="text"
                        value="{{ old('mobile') }}" required autofocus>
                </div>

                <div class="col-md-4 form-control-comment right">
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row no-gutters">
                <label class="col-md-2 form-control-label mb-xs-5 required">{{ __('Password') }} :</label>
                <div class="col-md-6">

                    <div class="input-group js-parent-focus">
                        <input
                            class="form-control js-child-focus js-visible-password @error('password') is-invalid @enderror"
                            name="password" type="password" value="" pattern=".{5,}" required="">
                        <span class="input-group-btn">
                            <button class="btn" type="button" data-action="show-password"
                                data-text-show="{{ __('general.show') }}" data-text-hide="{{ __('general.hide') }}">
                                {{ __('general.show') }}
                            </button>
                        </span>
                    </div>


                </div>

                <div class="col-md-4 form-control-comment right">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row no-gutters">
                <label class="col-md-2 form-control-label mb-xs-5 required">{{ __('Confirm Password') }} :</label>
                <div class="col-md-6">

                    <div class="input-group js-parent-focus">
                        <input
                            class="form-control js-child-focus js-visible-password @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" type="password" value="" pattern=".{5,}" required="">
                        <span class="input-group-btn">
                            <button class="btn" type="button" data-action="show-password"
                                data-text-show="{{ __('general.show') }}" data-text-hide="{{ __('general.hide') }}">
                                {{ __('general.show') }}
                            </button>
                        </span>
                    </div>


                </div>

                <div class="col-md-4 form-control-comment right">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


        </section>

        <footer class="form-footer clearfix">
            <div class="row no-gutters">
                <div class="col-md-10 offset-md-2">
                    <input type="hidden" name="submitLogin" value="1">

                    <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                        {{ __('Register') }}
                    </button>

                </div>
            </div>
        </footer>


    </form>

</div>



@endsection
