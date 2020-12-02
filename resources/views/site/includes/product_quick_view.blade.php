<div id="quickview-modal-product-details-{{ $product->id }}" class="modal fade quickview in " tabindex="-1" role="dialog"  style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-product-id="{{ $product->id }}">
                    <i class="material-icons close">close</i></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-md-5 col-sm-5 divide-right">

                        <div class="images-container bottom_thumb">

                            <div class="product-cover">
                                <img class="js-qv-product-cover img-fluid"
                                    src="{{ $product->images->first()->image_url?? asset('assets/site/images/products_defualt.png') }}"
                                    alt="" title="" style="width:100%;" itemprop="image">
                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                    <i class="fa fa-expand"></i>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-7 col-sm-7">
                        <h1 class="product-name">{{ $product->name }}</h1>

                        <div class="product-prices">

                            <div class="product-price has-discount" itemprop="offers" itemscope=""
                                itemtype="https://schema.org/Offer">
                                <link itemprop="availability" href="https://schema.org/InStock">
                                <meta itemprop="priceCurrency" content="GBP">

                                <div class="current-price">
                                    @if($product->special_price)
                                        <span itemprop="price" class="price">{{ $product->special_price?? '' }}</span>
                                        <span class="regular-price">{{ $product->price }}</span>
                                    @else
                                        <span itemprop="price" class="price">{{ $product->price }}</span>
                                    @endif
                                </div>

                            </div>

                            <div class="tax-shipping-delivery-label">
                                Tax included
                            </div>
                        </div>

                        <div id="product-description-short" itemprop="description">
                            {!! $product->description !!}
                        </div>

                        <div class="product-actions">
                            <form action="http://demo.bestprestashoptheme.com/savemart/en/cart" method="post"
                                id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                                <input type="hidden" name="id_product" value="12" id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="0" id="product_customization_id">

                                <div class="product-variants in_border">
                                    <div class="product-variants-item">
                                        <span class="control-label">Size : </span>
                                        <select id="group_1" data-product-attribute="1" name="group[1]">
                                            <option value="1" title="S" selected="selected">S</option>
                                            <option value="2" title="M">M</option>
                                            <option value="3" title="L">L</option>
                                            <option value="4" title="XL">XL</option>
                                        </select>
                                    </div>

                                    <div class="product-variants-item">
                                        <span class="control-label">Color : </span>
                                        <ul id="group_2">
                                            <li class="pull-xs-left input-container">
                                                <input class="input-color" type="radio" data-product-attribute="2"
                                                    name="group[2]" value="10">
                                                <span class="color" style="background-color: #E84C3D"><span
                                                        class="sr-only">Red</span></span>
                                            </li>
                                            <li class="pull-xs-left input-container">
                                                <input class="input-color" type="radio" data-product-attribute="2"
                                                    name="group[2]" value="11" checked="checked">
                                                <span class="color" style="background-color: #434A54"><span
                                                        class="sr-only">Black</span></span>
                                            </li>
                                            <li class="pull-xs-left input-container">
                                                <input class="input-color" type="radio" data-product-attribute="2"
                                                    name="group[2]" value="14">
                                                <span class="color" style="background-color: #5D9CEC"><span
                                                        class="sr-only">Blue</span></span>
                                            </li>
                                            <li class="pull-xs-left input-container">
                                                <input class="input-color" type="radio" data-product-attribute="2"
                                                    name="group[2]" value="15">
                                                <span class="color" style="background-color: #A0D468"><span
                                                        class="sr-only">Green</span></span>
                                            </li>
                                            <li class="pull-xs-left input-container">
                                                <input class="input-color" type="radio" data-product-attribute="2"
                                                    name="group[2]" value="17">
                                                <span class="color" style="background-color: #964B00"><span
                                                        class="sr-only">Brown</span></span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

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

                                    <a class="addToWishlist wishlistProd_12" href="#" data-rel="12"
                                        onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
                                        <i class="fa fa-heart"></i>
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <div class="clearfix"></div>

                                    <div id="product-availability" class="info-stock mt-20">
                                        <label class="control-label">Availability:</label>
                                        {{ $product->in_stock? 'in stock' : 'out of stock' }}
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </div>


                                    <p class="product-minimal-quantity mt-20">
                                    </p>

                                </div>

                                <input class="product-refresh" data-url-update="false" name="refresh" type="submit"
                                    value="Refresh" hidden="">

                            </form>
                        </div>

                        <div class="tabs">
                            <h4 class="buttons_bottom_block">
                                Information of seller
                            </h4>
                            <div class="seller_info">
                                <span class="seller_name">
                                    Harry Makle
                                </span>
                                <div class="average_rating">
                                    <a href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/3_harry-makle/comments"
                                        title="View comments about Harry Makle">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        (0)
                                    </a>
                                </div>
                            </div>
                            <div class="seller_links">
                                <p class="link_seller_profile">
                                    <a title="View seller profile"
                                        href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/3_harry-makle/">
                                        <i class="icon-user fa fa-user"></i>
                                        View seller profile
                                    </a>
                                </p>
                                <p class="link_contact_seller">
                                    <a title="Contact seller"
                                        href="http://demo.bestprestashoptheme.com/savemart/en/module/jmarketplace/contactseller?id_seller=3&amp;id_product=12">
                                        <i class="fa fa-comment"></i>
                                        Contact seller
                                    </a>
                                </p>
                                <p class="link_seller_favorite">
                                    <a title="Add to favorite seller"
                                        href="http://demo.bestprestashoptheme.com/savemart/en/module/jmarketplace/favoriteseller?id_seller=3&amp;id_product=12">
                                        <i class="icon-heart fa fa-heart"></i>
                                        Add to favorite seller
                                    </a>
                                </p>
                                <p class="link_seller_products">
                                    <a title="View more products of this seller"
                                        href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/3_harry-makle/products">
                                        <i class="icon-list fa fa-list"></i>
                                        View more products of this seller
                                    </a>
                                </p>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var PS_REWRITING_SETTINGS = "1";
                        </script>


                        <div class="dropdown social-sharing">
                            <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share With :</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                                <a class="dropdown-item"
                                    href="http://www.facebook.com/sharer.php?u=http://demo.bestprestashoptheme.com/savemart/en/home-appliance/12-nam-volutpat-justo-a-vehicula.html"
                                    title="Share" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                <a class="dropdown-item"
                                    href="https://twitter.com/intent/tweet?text=Nam volutpat justo a vehicula http://demo.bestprestashoptheme.com/savemart/en/home-appliance/12-nam-volutpat-justo-a-vehicula.html"
                                    title="Tweet" target="_blank"><i class="fa fa-twitter"></i>Tweet</a>
                                <a class="dropdown-item"
                                    href="https://plus.google.com/share?url=http://demo.bestprestashoptheme.com/savemart/en/home-appliance/12-nam-volutpat-justo-a-vehicula.html"
                                    title="Google+" target="_blank"><i class="fa fa-google-plus"></i>Google+</a>
                                <a class="dropdown-item"
                                    href="http://www.pinterest.com/pin/create/button/?media=http://demo.bestprestashoptheme.com/savemart/79/nam-volutpat-justo-a-vehicula.jpg&amp;url=http://demo.bestprestashoptheme.com/savemart/en/home-appliance/12-nam-volutpat-justo-a-vehicula.html"
                                    title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i>Pinterest</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

