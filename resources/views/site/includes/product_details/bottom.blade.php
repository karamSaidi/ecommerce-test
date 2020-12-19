<div class="product-detail-bottom">
    <div class="container">

        <section class="relate-product product-accessories clearfix">
            <h3 class="h5 title_block">Related products<span class="sub_title">Hand-picked arrivals from the best
                    designer</span></h3>
            <div class="products product_list grid owl-carousel owl-theme owl-rtl owl-loaded owl-drag"
                data-autoplay="true" data-autoplaytimeout="6000" data-loop="true" data-items="5" data-margin="0"
                data-nav="true" data-dots="false" data-items_mobile="2">

                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(1170px, 0px, 0px); transition: all 0s ease 0s; width: 3510px;">



                        @foreach ($products_related as $product)


                        <div class="owl-item active " style="width: 234px;">
                            <div class="item  text-center">
                                <div class="product-miniature js-product-miniature item-two first_item"
                                    data-id-product="1" data-id-product-attribute="40" itemscope=""
                                    itemtype="http://schema.org/Product">
                                    <div class="product-cat-content">

                                        <div class="category-title">
                                            <a
                                                href="{{ route('category.products', $product->categories->first()->slug) }}">
                                                {{ $product->categories->first()->name }}
                                            </a>
                                        </div>


                                        <div class="product-title" itemprop="name">
                                            <a href="{{ route('product.details', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </div>

                                    </div>
                                    <div class="thumbnail-container">

                                        <a href="{{ route('product.details', $product->slug) }}"
                                            class="thumbnail product-thumbnail two-image">
                                            @include('site.includes.product_images_home', ['images' =>
                                            $product->images])
                                        </a>

                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-group-price">

                                                <div class="product-price-and-shipping">
                                                    @if($product->special_price)
                                                    <span itemprop="price"
                                                        class="price">{{ $product->special_price?? '' }}</span>
                                                    <span class="regular-price">{{ $product->price }}</span>
                                                    @else
                                                    <span itemprop="price" class="price">{{ $product->price }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="product-comments">
                                                <div class="star_content">
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                </div>
                                                <span>5 review</span>
                                            </div>
                                            <p class="seller_name">
                                                <a title="View seller profile"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                    <i class="fa fa-user"></i>
                                                    David James
                                                </a>
                                            </p>

                                        </div>
                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers"
                                            itemscope="" itemtype="http://schema.org/Offer">
                                            <form action="http://demo.bestprestashoptheme.com/savemart/en/cart"
                                                method="post" class="formAddToCart">
                                                <input type="hidden" name="token"
                                                    value="28add935523ef131c8432825597b9928">
                                                <input type="hidden" name="id_product" value="1">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                        class="novicon-cart"></i><span>Add to cart</span></a>
                                            </form>

                                            <a class="addToWishlist " href="#" data-rel="1"
                                                data-product-id="{{ $product->id }}">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down"
                                                data-product-id="{{ $product->id }}">
                                                <i class="fa fa-search"></i><span> Quick view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        {{-- <div class="owl-item active" style="width: 234px;">
                            <div class="item  text-center">
                                <div class="product-miniature js-product-miniature item-two first_item"
                                    data-id-product="3" data-id-product-attribute="95" itemscope=""
                                    itemtype="http://schema.org/Product">
                                    <div class="product-cat-content">

                                        <div class="category-title"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone
                                                &amp; Tablet</a></div>


                                        <div class="product-title" itemprop="name"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris
                                                molestie porttitor diam</a></div>

                                    </div>
                                    <div class="thumbnail-container">

                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"
                                            class="thumbnail product-thumbnail two-image">
                                            <img class="img-fluid image-cover"
                                                src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                width="600" height="600">
                                            <img class="img-fluid image-secondary"
                                                src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                width="600" height="600">
                                        </a>





                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-group-price">

                                                <div class="product-price-and-shipping">



                                                    <span itemprop="price" class="price">30.00&nbsp;UK£</span>





                                                </div>

                                            </div>
                                            <div class="product-comments">
                                                <div class="star_content">
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                    <div class="star star_on"></div>
                                                </div>
                                                <span>5 review</span>
                                            </div>
                                            <p class="seller_name">
                                                <a title="View seller profile"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                    <i class="fa fa-user"></i>
                                                    Taylor Jonson
                                                </a>
                                            </p>

                                        </div>
                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers"
                                            itemscope="" itemtype="http://schema.org/Offer">
                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق"
                                                method="post" class="formAddToCart">
                                                <input type="hidden" name="token"
                                                    value="28add935523ef131c8432825597b9928">
                                                <input type="hidden" name="id_product" value="3">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                        class="novicon-cart"></i><span>أضف للسلة</span></a>
                                            </form>

                                            <a class="addToWishlist wishlistProd_3" href="#" data-rel="3"
                                                onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item active" style="width: 234px;">
                            <div class="item  text-center">
                                <div class="product-miniature js-product-miniature item-two first_item"
                                    data-id-product="5" data-id-product-attribute="134" itemscope=""
                                    itemtype="http://schema.org/Product">
                                    <div class="product-cat-content">

                                        <div class="category-title"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a>
                                        </div>


                                        <div class="product-title" itemprop="name"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula
                                                vel tempus sit amet ulte</a></div>

                                    </div>
                                    <div class="thumbnail-container">

                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"
                                            class="thumbnail product-thumbnail two-image">
                                            <img class="img-fluid image-cover"
                                                src="http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg"
                                                width="600" height="600">
                                            <img class="img-fluid image-secondary"
                                                src="http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg"
                                                width="600" height="600">
                                        </a>





                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-group-price">

                                                <div class="product-price-and-shipping">



                                                    <span itemprop="price" class="price">34.80&nbsp;UK£</span>





                                                </div>

                                            </div>
                                            <div class="product-comments">
                                                <div class="star_content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <span>0 review</span>
                                            </div>
                                            <p class="seller_name">
                                                <a title="View seller profile"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                    <i class="fa fa-user"></i>
                                                    Taylor Jonson
                                                </a>
                                            </p>

                                        </div>
                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers"
                                            itemscope="" itemtype="http://schema.org/Offer">
                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق"
                                                method="post" class="formAddToCart">
                                                <input type="hidden" name="token"
                                                    value="28add935523ef131c8432825597b9928">
                                                <input type="hidden" name="id_product" value="5">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                        class="novicon-cart"></i><span>أضف للسلة</span></a>
                                            </form>

                                            <a class="addToWishlist wishlistProd_5" href="#" data-rel="5"
                                                onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item active" style="width: 234px;">
                            <div class="item  text-center">
                                <div class="product-miniature js-product-miniature item-two first_item"
                                    data-id-product="8" data-id-product-attribute="172" itemscope=""
                                    itemtype="http://schema.org/Product">
                                    <div class="product-cat-content">

                                        <div class="category-title"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a>
                                        </div>


                                        <div class="product-title" itemprop="name"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر">Curabitur
                                                in lorem sit ameten alt</a></div>

                                    </div>
                                    <div class="thumbnail-container">

                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر"
                                            class="thumbnail product-thumbnail two-image">
                                            <img class="img-fluid image-cover"
                                                src="http://demo.bestprestashoptheme.com/savemart/59-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/59-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                width="600" height="600">
                                            <img class="img-fluid image-secondary"
                                                src="http://demo.bestprestashoptheme.com/savemart/60-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/60-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                width="600" height="600">
                                        </a>





                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-group-price">

                                                <div class="product-price-and-shipping">



                                                    <span itemprop="price" class="price">18.00&nbsp;UK£</span>





                                                </div>

                                            </div>
                                            <div class="product-comments">
                                                <div class="star_content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <span>0 review</span>
                                            </div>
                                            <p class="seller_name">
                                                <a title="View seller profile"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                    <i class="fa fa-user"></i>
                                                    Taylor Jonson
                                                </a>
                                            </p>

                                        </div>
                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers"
                                            itemscope="" itemtype="http://schema.org/Offer">
                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق"
                                                method="post" class="formAddToCart">
                                                <input type="hidden" name="token"
                                                    value="28add935523ef131c8432825597b9928">
                                                <input type="hidden" name="id_product" value="8">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                        class="novicon-cart"></i><span>أضف للسلة</span></a>
                                            </form>

                                            <a class="addToWishlist wishlistProd_8" href="#" data-rel="8"
                                                onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item active " style="width: 234px;">
                            <div class="item  text-center">
                                <div class="product-miniature js-product-miniature item-two first_item"
                                    data-id-product="16" data-id-product-attribute="323" itemscope=""
                                    itemtype="http://schema.org/Product">
                                    <div class="product-cat-content">

                                        <div class="category-title"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home
                                                Appliance</a></div>


                                        <div class="product-title" itemprop="name"><a
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود">Cras
                                                consequat quis dolor eunde</a></div>

                                    </div>
                                    <div class="thumbnail-container">

                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود"
                                            class="thumbnail product-thumbnail two-image">
                                            <img class="img-fluid image-cover"
                                                src="http://demo.bestprestashoptheme.com/savemart/99-home_default/cras-consequat-quis-dolor-eunde.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/99-large_default/cras-consequat-quis-dolor-eunde.jpg"
                                                width="600" height="600">
                                            <img class="img-fluid image-secondary"
                                                src="http://demo.bestprestashoptheme.com/savemart/100-home_default/cras-consequat-quis-dolor-eunde.jpg"
                                                alt=""
                                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/100-large_default/cras-consequat-quis-dolor-eunde.jpg"
                                                width="600" height="600">
                                        </a>


                                        <div class="product-flags discount">Sale</div>



                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-group-price">

                                                <div class="product-price-and-shipping">



                                                    <span itemprop="price" class="price">21.60&nbsp;UK£</span>



                                                    <span class="regular-price">24.00&nbsp;UK£</span>




                                                </div>

                                            </div>
                                            <div class="product-comments">
                                                <div class="star_content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <span>0 review</span>
                                            </div>
                                            <p class="seller_name">
                                                <a title="View seller profile"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
                                                    <i class="fa fa-user"></i>
                                                    Harry Makle
                                                </a>
                                            </p>

                                        </div>
                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers"
                                            itemscope="" itemtype="http://schema.org/Offer">
                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق"
                                                method="post" class="formAddToCart">
                                                <input type="hidden" name="token"
                                                    value="28add935523ef131c8432825597b9928">
                                                <input type="hidden" name="id_product" value="16">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                        class="novicon-cart"></i><span>أضف للسلة</span></a>
                                            </form>

                                            <a class="addToWishlist wishlistProd_16" href="#" data-rel="16"
                                                onclick="WishlistCart('wishlist_block_list', 'add', '16', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </section>

    </div>
</div>
