<div class="product-add-to-cart in_border">
    <div class="add">
        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart"
            type="submit">
            <div class="icon-cart">
                <i class="shopping-cart"></i>
            </div>
            <span>Add to cart</span>
        </button>
    </div>

    <a class="addToWishlist " href="#" data-rel="1"
        data-product-id="{{ $product->id }}">
        <i class="fa fa-heart"></i>
        <span>Add to Wishlist</span>
    </a>

    <div class="clearfix"></div>

    <div class="info-stock ml-auto">
        <label class="control-label">Availability:</label>
        <i class="fa fa-check-square-o" aria-hidden="true"></i>
        {{ $product->in_stock? 'in stock' : 'out of stock' }}
    </div>


    <p class="product-minimal-quantity mt-20">
        The minimum purchase order quantity for the product is 2.
    </p>

</div>
