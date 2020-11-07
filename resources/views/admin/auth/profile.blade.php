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
                    {{__('auth.edit_profile')}}
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')



<div class="card">

    <div class="card-body">
        <form class="form" method="post" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
            @csrf()
            @method('put')

            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="form-body">
                <h4 class="form-section">
                    <i class="ft-user"></i>
                    {{$user->name}}
                    <span class="badge badge-{{$user->status? 'success' : 'danger'}}">
                        {{get_status($user->status)}}
                    </span>
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('auth.email')}}</label>
                            <input type="email" value="{{$user->email}}" readonly
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="{{__('auth.email')}}" name="email">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('auth.name')}}</label>
                            <input type="text" value="{{old('name', $user->name)}}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{__('auth.your_name')}}" name="name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label>{{__('auth.avatar')}}</label>
                            <input type="file" class="form-control-file" name="avatar">
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        @if($user->avatar)
                        <img src="{{$user->avatar_url}}" alt="{{$user->name}}" width="100"
                            class="img-thumbnail img-fluid">
                        @else
                        <img src="{{asset('assets/admin')}}/images/portrait/small/avatar-s-19.png" alt="{{$user->name}}"
                            class="img-thumbnail img-fluid">
                        @endif
                    </div>
                </div>

            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> {{__('general.save')}}
                </button>
            </div>
        </form><!-- ./profile-update -->

        <form class="form" method="post" action="{{route('admin.password_change')}}">
            @csrf()
            @method('put')

            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="form-body">
                <h4 class="form-section">
                    <i class="ft-lock"></i>
                    {{__('auth.password_change')}}
                    </span>
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('auth.old_password')}}</label>
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                placeholder="{{__('auth.old_password')}}" name="old_password">
                            @error('old_password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('auth.new_password')}}</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                placeholder="{{__('auth.new_password')}}" name="new_password">
                            @error('new_password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('auth.password_confirmation')}}</label>
                            <input type="password"
                                class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                placeholder="{{__('auth.password_confirmation')}}" name="new_password_confirmation">
                            @error('new_password_confirmation')
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
        </form><!-- ./chnage-password -->
    </div><!-- ./card-body -->

</div><!-- ./card -->



@endsection
