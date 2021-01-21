@extends('layouts.site')

@section('breadcrumb')
<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope="" itemtype="{{ route('home') }}">
        <a itemprop="item" href="{{ route('home') }}">
            <span itemprop="name">{{ __('site.home') }}</span>
        </a>
        <meta itemprop="position" content="1">
    </li>
    <li itemprop="itemListElement" itemscope="" itemtype="{{ route('home') }}">
        <a itemprop="item" href="{{ route('home') }}">
            <span itemprop="name">{{ $product->brand->name }}</span>
        </a>
        <meta itemprop="position" content="2">
    </li>
    <li itemprop="itemListElement" itemscope="" itemtype="{{ route('product.details', $product->slug) }}">
        <a itemprop="item" href="{{ route('product.details', $product->slug) }}">
            <span itemprop="name">{{ $product->name }}</span>
        </a>
        <meta itemprop="position" content="3">
    </li>
</ol>
@stop

@section('content')


<section id="content" class="page-home pagehome-three mb-4">
    <div class="container">
        <div class="row">

            @include('site.includes.product_details.top')

            @include('site.includes.product_details.middle')

            @include('site.includes.product_details.bottom')

        </div>
    </div>
</section>





@if($product->images)
<div class="modal fade js-product-images-modal" id="product-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <figure>
                    <img class="js-modal-product-cover product-cover-modal" width="600" height="500"
                        src="{{ $product->images->first()->image_url }}"
                        alt="" title="" itemprop="image">
                </figure>
                <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">

                    <div class="js-modal-mask mask  nomargin ">
                        <ul class="product-images js-modal-product-images">
                            @foreach ($product->images as $image)

                            <li class="thumb-container">
                                <img
                                data-image-large-src="{{ $image->image_url }}"
                                class="thumb js-modal-thumb" src="{{ $image->image_url }}"
                                alt="" title="" width="125" height="50" itemprop="image">
                            </li>
                           @endforeach
                        </ul>
                    </div>

                </aside>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endif

@endsection



@push('scripts')
<script>
    $(document).on('click', '.quick-view', function (e) {
    e.preventDefault();
    $('#quickview-modal-product-details-' + $(this).data('product-id')).css('display', 'block');
});
$(document).on('click', '.close', function (e) {
    $('#quickview-modal-product-details-' + $(this).data('product-id')).css('display', 'none');
    $('.not-loggedin-modal').css('display', 'none');
});
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.addToWishlist', function (e) {
    e.preventDefault();
    let wishlist = $(this);
    @guest
    alert('login');
    @else

    $.ajax({
        type: "get",
        url: "{{ route('wish.list.add') }}",
        data:{
            product_id: $(this).data('product-id')
        },
        success: function (response) {
            if(response.status){
                if(response.action == 'add')
                    wishlist.addClass('in-wish-list');
                else
                    wishlist.removeClass('in-wish-list');
            }

        }
    });

    @endguest


});

</script>
@endpush
