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
        <form class="form" method="post" action="{{route('admin.products_stock.store')}}">
            @csrf()
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="form-body">
                <h4 class="form-section">
                    {{__('admin/products.stock_information')}}
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.sku')}}</label>
                            <input type="text" value="{{$product->sku}}"
                                class="form-control @error('sku') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_sku')}}" name="sku">
                            @error('sku')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="checkbox">
                            <input type="checkbox" class="switchery" value="1" {{$product->manage_stock? 'checked': ''}}
                                name="manage_stock" id="manage_stock">
                            <label class="ml-1">
                                {{__('admin/products.manage_stock')}}
                            </label>
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <fieldset  class="col-md-6" @if(!$product->manage_stock) disabled @endif>
                        <div class="form-group"  id="qty">
                            <label>{{__('admin/products.qty')}}</label>
                            <input type="number" value="{{$product->qty}}" step="1"
                                class="form-control @error('qty') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_qty')}}" name="qty">
                            @error('qty')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </fieldset >
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.in_stock')}}</label>
                            <select class="select2 form-control @error('in_stock') is-invalid @enderror"
                                name="in_stock">
                                <optgroup label="{{__('admin/products.special_price_end')}}">
                                    <option value="0" @if($product->in_stock == '0') selected @endif
                                        >{{ __('admin/products.not_avalable') }}</option>
                                    <option value="1" @if($product->in_stock == '1') selected
                                        @endif >{{ __('admin/products.avalable') }}</option>
                                </optgroup>
                            </select>
                            @error('in_stock')
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

@push('scripts')
    <script>


        $(document).ready(function () {
            $('#manage_stock').change(function (e) {
                e.preventDefault();
                if($('#manage_stock').is(":checked")){
                    $('#qty').parent().removeAttr("disabled");
                }
                else{
                    $('#qty').parent().attr('disabled', 'disabled');

                }
            });


        });

    </script>
@endpush
