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
                    {{__('admin/menu.brands_list')}}
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')



<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            <i class="la la-list"></i>
            {{__('admin/menu.brands_list')}}

            <a href="{{route('admin.brands.create')}}" class="btn btn-outline-primary btn-sm float-lg-right">
                <i class="la la-plus"></i>
                <span>{{__('admin/menu.brands_create')}}</span>
            </a>
        </h4>

    </div>
    <div class="card-content collapse show">
        <div class="card-body card-dashboard">

            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr role="row">
                                <th>{{__('general.name')}}</th>
                                <th>{{__('general.image')}}</th>
                                <th>{{__('general.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                            <tr role="row" class="odd">
                                <td>{{$brand->name}}</td>
                                <td class="td-image"><img src="{{$brand->image_url}}" alt="{{$brand->name}}"
                                        class="img-thumbnail img-fluid"></td>
                                <td>
                                    <div class="btn-group">

                                        <a href="{{route('admin.brands.edit', $brand->id)}}"
                                            class="btn btn-outline-info btn-sm">
                                            <i class="la la-edit"></i>
                                        </a>
                                        <form action="{{route('admin.brands.destroy', $brand->id)}}" method="post"
                                            class="form-delete">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        {{$brands->appends(request()->input())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
