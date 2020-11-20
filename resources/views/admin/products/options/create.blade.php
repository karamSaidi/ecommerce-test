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
        <form class="form" method="post" action="{{route('admin.products_options.store', $product->id)}}" >
            @csrf()
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="form-body">
                <h4 class="form-section">
                    {{__('admin/products.options_information')}}
                </h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{__('admin/menu.attributes')}}</label>
                            <select class="select2 form-control @error('attribute_id') is-invalid @enderror" name="attribute_id">
                                <optgroup label="{{__('admin/menu.attributes')}}">
                                    @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}" @if(old('attribute_id') == $attribute->id) selected @endif >{{ $attribute->name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('attribute_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{__('admin/products.potion_name')}}</label>
                            <input type="text" value="{{old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_potion_name')}}" name="name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{__('admin/products.price')}}</label>
                            <input type="number" value="{{old('price')}}" step="0.01"
                                class="form-control @error('price') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_price')}}" name="price">
                            @error('price')
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


@include('admin.products.options.index', ['options' => $product->options])

@endsection


