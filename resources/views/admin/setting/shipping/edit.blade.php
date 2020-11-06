@extends('layouts.admin')

@section('page_title', 'Dashboard')

@section('content-header')
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">
        {{-- {{__('admin/menu.shipping_methods')}}
        <small>{{$shipping->key}}</small> --}}
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
        <form class="form">
            <div class="form-body">
                <h4 class="form-section">
                    <i class="la la-truck"></i>
                    {{__('admin/menu.shipping_methods')}}
                    <small>{{$shipping->key}}</small>
                </h4>
                {{-- <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput1">First Name</label>
                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
                                name="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput2">Last Name</label>
                            <input type="text" id="projectinput2" class="form-control" placeholder="Last Name"
                                name="lname">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> Save
                </button>
            </div>
        </form>
    </div>

</div>


@endsection