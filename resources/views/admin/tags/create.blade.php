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
                    <a href="{{route('admin.tags')}}">{{__('admin/menu.tags_list')}}</a>
                </li>
                <li class="breadcrumb-item active">
                    {{__('admin/menu.tags_create')}}
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')



<div class="card">

    <div class="card-body">
        <form class="form" method="post" action="{{route('admin.tags.store')}}">
            @csrf()

            <div class="form-body">
                <h4 class="form-section">
                    <i class="la la-plus"></i>
                    {{__('admin/menu.tags_create')}}
                </h4>
                <div class=" row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/tags.name')}}</label>
                            <input type="text" value="{{old('name')}}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{__('admin/tags.enter_name')}}" name="name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="checkbox">
                            <input type="checkbox" class="switchery" value="1" {{old('status')? 'checked': ''}}
                                name="status">
                            <label class="ml-1">
                                {{__('admin/tags.status')}}
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6">

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
