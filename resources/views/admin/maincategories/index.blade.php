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
                    {{__('admin/menu.main_categories_list')}}
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
            {{__('admin/menu.main_categories_list')}}

            <a href="{{route('admin.main_categories.create')}}" class="btn btn-outline-primary btn-sm float-lg-right">
                <i class="la la-plus"></i>
                <span>{{__('admin/menu.main_categories_create')}}</span>
            </a>
        </h4>

    </div>
    <div class="card-content collapse show">
        <div class="card-body card-dashboard">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder=""
                                    aria-controls="DataTables_Table_0"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered zero-configuration dataTable"
                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th>{{__('general.name')}}</th>
                                    <th>{{__('general.slug')}}</th>
                                    <th>{{__('general.image')}}</th>
                                    <th>{{__('general.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr role="row" class="odd">
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td class="td-image"><img src="{{$category->image_url}}" alt="{{$category->name}}"
                                            class="img-thumbnail img-fluid"></td>
                                    <td>
                                        <div class="btn-group">

                                            <a href="{{route('admin.main_categories.edit', $category->id)}}"
                                                class="btn btn-outline-info btn-sm">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <form action="{{route('admin.main_categories.destroy', $category->id)}}"
                                                method="post" class="form-delete">
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
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            {{__('general.showing')}}
                            {{$categories->firstItem()}}
                            {{__('general.to')}}
                            {{$categories->lastItem()}}
                            {{__('general.of')}}
                            {{$categories->total()}}
                            entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            {{$categories->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection