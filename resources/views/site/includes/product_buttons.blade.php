<div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope=""
    itemtype="http://schema.org/Offer">
    <form action="{{ route('cart.add', $product->slug) }}" method="post" class="formAddToCart">
        @csrf
        {{-- <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
        <input type="hidden" name="id_product" value="1"> --}}
        {{-- <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to
                cart</span></a> --}}
        <button type="submit" class="add-to-cart">
            <i class="novicon-cart"></i>
            <span>Add to cart</span>
        </button>
        {{-- <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to
                cart</span></a> --}}
    </form>

    <a class="addToWishlist " href="#" data-rel="1" data-product-id="{{ $product->id }}">
        <i class="fa fa-heart"></i>
        <span>Add to Wishlist</span>
    </a>
    <a href="#" class="quick-view hidden-sm-down" data-product-id="{{ $product->id }}">
        <i class="fa fa-search"></i><span> Quick view</span>
    </a>
</div>
