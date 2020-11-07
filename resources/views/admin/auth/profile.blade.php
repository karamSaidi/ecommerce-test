@extends('layouts.admin')

@section('page_title', 'Dashboard')

@section('content-header')
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">

    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">{{__('admin/menu.dashboard')}}</a>
                </li>
                <li class="breadcrumb-item active">
                    {{__('admin/menu.shipping_methods')}}
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')



<div class="card">

    <div class="card-body">
        <form class="form" method="post" action="">
            @csrf()
            @method('put')

            {{-- <input type="hidden" name="id" value="{{$shipping->id}}"> --}}

            <div class="form-body">
                <h4 class="form-section">
                    <i class="la la-truck"></i>
                    {{__('admin/menu.shipping_methods')}}
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/settings/shipping.name')}}</label>
                            <input type="text" value="{{old('value')}}"
                                class="form-control @error('value') is-invalid @enderror" placeholder="
                                {{__('admin/settings/shipping.name')}}" name="value">
                            @error('value')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/settings/shipping.value')}}</label>
                            <input type="number" value="{{old('plain_value')}}"
                                class="form-control @error('plain_value') is-invalid @enderror" placeholder="
                                {{__('admin/settings/shipping.value')}}" name="plain_value">
                            @error('plain_value')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <fieldset class="checkbox">
                    <label>
                        <input type="checkbox" value="1" {{old('status')? 'checked': ''}} name="status">
                        {{__('admin/settings/shipping.enable_method')}}
                    </label>
                </fieldset>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> {{__('general.save')}}
                </button>
            </div>
        </form>
    </div>

</div>


@endsection
