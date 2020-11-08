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
        <form class="form" method="post" action="{{route('admin.settings.shipping.update', $shipping->id)}}">
            @csrf()
            @method('put')

            <input type="hidden" name="id" value="{{$shipping->id}}">

            <div class="form-body">
                <h4 class="form-section">
                    <i class="la la-truck"></i>
                    {{__('admin/menu.shipping_methods')}}
                    <small>{{$shipping->value}}</small>
                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/settings/shipping.name')}}</label>
                            <input type="text" value="{{old('value', $shipping->value)}}"
                                class="form-control @error('value') is-invalid @enderror"
                                placeholder="{{__('admin/settings/shipping.name')}}" name="value">
                            @error('value')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/settings/shipping.value')}}</label>
                            <input type="number" value="{{old('plain_value', $shipping->plain_value)}}"
                                class="form-control @error('plain_value') is-invalid @enderror"
                                placeholder="{{__('admin/settings/shipping.value')}}" name="plain_value">
                            @error('plain_value')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <fieldset class="checkbox">
                    <input type="checkbox" class="switchery" value="1"
                        {{old('status', $shipping->status)? 'checked': ''}} name="status">
                    <label class="ml-1">
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
