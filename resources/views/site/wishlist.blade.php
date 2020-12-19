@extends('layouts.site')

@section('breadcrumb')
<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope="" itemtype="{{ route('home') }}">
        <a itemprop="item" href="{{ route('home') }}">
            <span itemprop="name">{{ __('site.home') }}</span>
        </a>
        <meta itemprop="position" content="1">
    </li>
    <li itemprop="itemListElement" itemscope="" itemtype="{{ route('wishlist') }}">
        <a itemprop="item" href="{{ route('wishlist') }}">
            <span itemprop="name">my wishlist</span>
        </a>
        <meta itemprop="position" content="2">
    </li>
</ol>
@stop

@section('content')


<section id="content" class="page-home pagehome-three mb-4">
    <div class="container">
        <div class="row">

            <div class="block-category hidden-sm-down">
                <h1 class="h1">Wishlist Products</h1>
            </div>


            @include('site.includes.products_lists', ['products' => $wishlist])






        </div>
    </div>
</section>


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
