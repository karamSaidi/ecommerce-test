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

    <form action="{{ route('user.confirm_verify') }}" method="post">
        @csrf
        <section>

            <input type="hidden" name="back" value="my-account">

            <div class="form-group row no-gutters">
                <label class="col-md-2 form-control-label mb-xs-5 required">{{ __('user.enter_verify_code') }} :</label>
                <div class="col-md-6">
                    <input class="form-control @error('verify_code') is-invalid @enderror" name="verify_code" type="text"
                        value="{{ old('verify_code') }}" required autofocus>
                </div>

                <div class="col-md-4 form-control-comment right">
                    @error('verify_code')
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

                    <button class="btn btn-primary"  type="submit">
                        {verify code
                    </button>

                </div>
            </div>
        </footer>


    </form>

</div>

@endsection


