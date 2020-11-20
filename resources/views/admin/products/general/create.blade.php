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
        <form class="form" method="post" action="{{route('admin.products_general.store')}}"
            enctype="multipart/form-data">
            @csrf()

            <div class="form-body">
                <h4 class="form-section">
                    <i class="la la-plus"></i>
                    {{__('admin/menu.products_create')}}
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.name')}}</label>
                            <input type="text" value="{{old('name')}}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_name')}}" name="name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('admin/products.short_description')}}</label>
                            <textarea class="form-control @error('short_description') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_short_description')}}"
                                name="short_description">{{old('short_description')}}</textarea>
                            @error('short_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{__('admin/products.description')}}</label>
                            <textarea class="form-control summernote  @error('description') is-invalid @enderror"
                                placeholder="{{__('admin/products.enter_description')}}"
                                name="description">{{old('description')}}</textarea>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                </div>
                <div class=" row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">{{__('admin/menu.brand')}}</label>
                            <select class="form-control select2 @error('brand_id') is-invalid @enderror"
                                name="brand_id">
                                <option value="">{{__('admin/products.select_brands')}}</option>
                                @foreach ($data['brands'] as $brand)
                                <option value="{{$brand->id}}" @if(old('brand_id')==$brand->id) selected @endif>
                                    {{$brand->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('brand_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">{{__('admin/menu.categories')}}</label>
                            <select class="form-control select2 @error('categories') data-bgcolor @enderror"
                                name="categories[]" multiple="multiple">
                                <option value="">{{__('admin/products.select_categories')}}</option>
                                @foreach ($data['categories'] as $cat)
                                <option value="{{$cat->id}}" @if(old('categories')==$cat->id) selected @endif>
                                    {{$cat->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('categories')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            @error('categories.*')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">{{__('admin/menu.tags')}}</label>
                            <select class="form-control select2 @error('tags.*') is-invalid @enderror" name="tags[]"
                                multiple="multiple">
                                <option value="">{{__('admin/products.select_tags')}}</option>
                                @foreach ($data['tags'] as $tag)
                                <option value="{{$tag->id}}" @if(old('tags')==$tag->id) selected @endif>
                                    {{$tag->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('tags.*')
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
                                {{__('admin/categories.status')}}
                            </label>
                        </fieldset>
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

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/editors/summernote.css">
@endpush

@push('scripts')
<script src="{{asset('assets/admin')}}/vendors/js/editors/codemirror/lib/codemirror.js" type="text/javascript"></script>

<script src="{{asset('assets/admin')}}/vendors/js/editors/summernote/summernote.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
    $('.summernote').summernote();
    });
</script>
@endpush
