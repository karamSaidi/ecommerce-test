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
                    {{__('admin/menu.products_list')}}
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
            {{__('admin/menu.products_list')}}

            <a href="{{route('admin.products_general.create')}}" class="btn btn-outline-primary btn-sm float-lg-right">
                <i class="la la-plus"></i>
                <span>{{__('admin/menu.products_create')}}</span>
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
                                <th>{{__('general.slug')}}</th>
                                <th>{{__('general.price')}}</th>
                                <th>{{__('general.image')}}</th>
                                <th>{{__('general.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr role="row" class="odd">
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->price}}</td>
                                <td class="td-image">
                                    <img src="" alt="{{$product->name}}" class="img-thumbnail img-fluid"></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.products_price.get', $product->id)}}"
                                            class="btn btn-outline-primary btn-sm">
                                            {{ __('general.price') }}
                                        </a>
                                        <a href="{{route('admin.products_stock.get', $product->id)}}"
                                            class="btn btn-outline-success btn-sm">
                                            {{ __('admin/products.stock') }}
                                        </a>
                                        <a href="{{route('admin.products_image.get', $product->id)}}"
                                            class="btn btn-outline-success btn-sm">
                                            {{ __('admin/products.images') }}
                                        </a>
                                        <a href="{{route('admin.products.edit', $product->id)}}" title="{{ __('general.edit') }}"
                                            class="btn btn-outline-info btn-sm">
                                            <i class="la la-edit"></i>
                                        </a>
                                        <form action="{{route('admin.products.destroy', $product->id)}}" method="post"
                                            class="form-delete">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="{{ __('general.delete') }}">
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

            <div class="col-sm-12">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    {{$products->appends(request()->input())->links()}}
                </div>
            </div>


        </div>
    </div>
</div>


@endsection
