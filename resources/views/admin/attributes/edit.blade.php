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
                <li class="breadcrumb-item">
                    <a href="{{route('admin.attributes')}}">{{__('admin/menu.attributes_list')}}</a>
                </li>
                <li class="breadcrumb-item active">
                    {{__('admin/attributes.edit')}}
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')



<div class="card">

    <div class="card-body">
        <form class="form" method="post" action="{{route('admin.attributes.update', $attribute->id)}}">
            @csrf()
            @method('put')
            <input type="hidden" name="id" value="{{$attribute->id}}">
            <div class="form-body">
                <h4 class="form-section">
                    <i class="la la-edit"></i>
                    {{__('admin/attributes.edit')}}
                    <small>{{$attribute->name}}</small>
                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/attributes.name')}}</label>
                            <input type="text" value="{{old('name', $attribute->name)}}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{__('admin/attributes.enter_name')}}" name="name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
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
