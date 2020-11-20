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
                    <a href="{{route('admin.products')}}">{{__('admin/menu.products_list')}}</a>
                </li>
                <li class="breadcrumb-item active">
                    {{__('admin/menu.products_create')}}
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')



<div class="card">

    <div class="card-body">
        <form class="form" method="post" action="{{route('admin.products_price.store')}}" >
            @csrf()
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="form-body">
                <h4 class="form-section">
                    {{__('admin/products.price_information')}}
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.price')}}</label>
                            <input type="number" value="{{$product->price}}" step="0.01"
                                class="form-control @error('price') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_price')}}" name="price">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.special_price')}}</label>
                            <input type="number" value="{{$product->special_price }}" step="0.01"
                                class="form-control @error('special_price') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_special_price')}}" name="special_price">
                            @error('special_price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                            <label>{{__('admin/products.special_price_start')}}</label>
                            <input  type="date" value="{{ date("Y-m-d", strtotime($product->special_price_start)) }}"
                                class="form-control @error('special_price_start') is-invalid @enderror"
                                 name="special_price_start">
                            @error('special_price_start')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.special_price_end')}}</label>
                            <input type="date" value="{{ date("Y-m-d", strtotime($product->special_price_end)) }}"
                                class="form-control @error('special_price_end') is-invalid @enderror"
                                 name="special_price_end">
                            @error('special_price_end')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.special_price_type')}}</label>
                            <select class="select2 form-control @error('special_price_type') is-invalid @enderror" name="special_price_type">
                                <optgroup label="{{__('admin/products.special_price_end')}}">
                                    <option value="fixed" @if($product->special_price_type == 'fixed') selected @endif >Fixed</option>
                                    <option value="percent" @if($product->special_price_type == 'percent') selected @endif >Percentage</option>
                                </optgroup>
                            </select>
                            @error('special_price_type')
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


