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
        <form class="form" method="post" action="{{route('admin.products_image.store')}}">
            @csrf()
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="form-body">
                <h4 class="form-section">
                    {{__('admin/products.images')}}
                </h4>
                <div class="form-group">

                    <div class="dropzone dropzone-area" id="dpz-multiple-files">
                        <div class="dz-message">{{ __('admin/products.drop_files_here_to_upload') }}</div>
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
<div class="card">


    <div class="card-body">
        <div class="row">
            @foreach ($product->images as $image)
            <div class="col-md-3">

                <form action="{{ route('admin.products.image.remove.file', $image->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="card product-images">
                        <img class="card-img-top" src="{{ asset($image->image_url) }}" alt="">
                        <div class="card-body text-center">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i> {{ __('general.delete') }}
                                </button>
                            </div>
                        </div>
                      </div>

                </form>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/file-uploaders/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/plugins/file-uploaders/dropzone.css">
@endpush

@push('scripts')
<script src="{{asset('assets/admin')}}/vendors/js/extensions/dropzone.min.js" type="text/javascript"></script>
{{-- <script src="{{asset('assets/admin')}}/js/scripts/extensions/dropzone.js" type="text/javascript"></script> --}}
<script>
    var uploadedDocumentMap = {};
    Dropzone.options.dpzMultipleFiles = {
        paramName: "dzfile", //the name that will be use to transfer file
        // autoProcessQueue: false,
        maxFilesize: 5, //MB
        clickable: true,
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        dictFallbackMessage: 'fallback_message',
        dictInvalidFiletype: 'file_type_not_allow',
        dictCancelUpload: 'cancel_upload',
        dictCancelUploadConfirmation: 'confirm_cancel_upload',
        dictRemoveFile: 'remove_file',
        dictMaxFilesExceeded: 'max_files_exceeded',
        dictInvalidFileType: "file_type_error",

        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        url: '{{ route('admin.products.image.upload') }}', //url to upload image
        success: function(file, response){
                    $('form').append('<input type="hidden" name="images[]" value="' + response.name +'">');
                    uploadedDocumentMap[file.name] = response.name;
                },
        removedfile: function(file){
            file.previewElement.remove();
            var name = '';
            if(typeof file.file_name !== 'undefined'){
                name = file.file_name;
            }
            else{
                name = uploadedDocumentMap[file.name];

                $.post("{{ route('admin.products.image.remove') }}", { "name": name, "_token": "{{ csrf_token() }}",} , function( data ) {
                    if(data.status === false){
                        name = '';
                    }
                });
            }
            $('form').find('input[name="images[]"][value="' + name +'"]').remove();
        } ,
        // previewsContainer: "#dpz-btn-select-files", //Define the container to display the previes
        init: function(){
            @if(isset($event) && $event->document)
            var files =
            {!! json_encode($event->document) !!}
            for(var i in files){
                var file = files[i];
                this.options.addedfile.call(this, file);
                file.previewElement.classList.add('dz-complete');
                $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">');
            }
            @endif
        },


    };

</script>
@endpush
