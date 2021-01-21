<div class="product-detail-top">
    <div class="container">

        <div class="row main-productdetail" data-product_layout_thumb="list_thumb" style="position: relative;">
            <div class="col-lg-5 col-md-4 col-xs-12 box-image">

                <section class="page-content" id="content">

                    <div class="images-container list_thumb">

                        @if($product->images)

                        <div class="product-cover">
                            <img class="js-qv-product-cover img-fluid" src="{{ $product->images->first()->image_url }}"
                                alt="" title="" style="width:100%;" itemprop="image">

                            <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                <i class="fa fa-expand"></i>
                            </div>
                        </div>

                        <div class="js-qv-mask mask only-product">
                            <div class="row">
                                @foreach ($product->images as $image)
                                <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                    <img class="img-fluid thumb js-thumb "
                                        data-image-medium-src="{{ $image->image_url }}"
                                        data-image-large-src="{{ $image->image_url }}" src="{{ $image->image_url }}"
                                        alt="" title="" itemprop="image" height="200">
                                </div>
                                @endforeach
                            </div>
                        </div>

                        @endif

                    </div>

                </section>

            </div>

            <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                <div class="product-information">
                    <div class="product-actions">

                        <form action="http://demo.bestprestashoptheme.com/savemart/en/cart" method="post"
                            id="add-to-cart-or-refresh" class="row">
                            <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                            <input type="hidden" name="id_product" value="1" id="product_page_product_id">
                            <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                            <div class="productdetail-right col-12 col-lg-6 col-md-6">
                                <div class="product-reviews">
                                    <div id="product_comments_block_extra">

                                        <div class="comments_note">
                                            <span>Review: </span>
                                            <div class="star_content clearfix">
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                            </div>
                                        </div>

                                        <div class="comments_advices">
                                            <a href="#" class="comments_advices_tab"><i class="fa fa-comments"></i>Read
                                                reviews (1)</a>
                                            <a class="open-comment-form" data-toggle="modal"
                                                data-target="#new_comment_form" href="#"><i class="fa fa-edit"></i>Write
                                                your review</a>
                                        </div>
                                    </div>

                                </div>

                                <h1 class="detail-product-name" itemprop="name">{{ $product->name }}</h1>

                                <div class="group-price d-flex justify-content-start align-items-center">

                                    <div class="product-prices">


                                        <div class="product-price " itemprop="offers" itemscope=""
                                            itemtype="https://schema.org/Offer">
                                            <link itemprop="availability" href="https://schema.org/InStock">
                                            <meta itemprop="priceCurrency" content="GBP">

                                            <div class="current-price">
                                                @if($product->special_price)
                                                <span itemprop="price"
                                                    class="price">{{ $product->special_price?? '' }}</span>
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

                                </div>

                                <div class="in_border end">

                                    <div class="sku">
                                        <label class="control-label">Sku:</label>
                                        <span itemprop="sku" content="demo_1">demo_1</span>
                                    </div>
                                    <div class="pro-cate">
                                        <label class="control-label">Categories:</label>
                                        <div>
                                            @foreach ($product->categories as $category)
                                            <span>
                                                <a href="{{ route('category.products', $category->slug) }}"
                                                    title="{{ $category->name }}">
                                                    {{ $category->name }}
                                                </a>
                                            </span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="pro-tag">
                                        <label class="control-label">Tags:</label>
                                        <div>
                                            @foreach ($product->tags as $tag)
                                            <span>
                                                <a href="{{ route('admin.categories', $tag->slug) }}"
                                                    title="{{ $tag->name }}">
                                                    {{ $tag->name }}
                                                </a>
                                            </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="_desktop_productcart_detail">
                                    @include('site.includes.product_add')
                                </div>

                                <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit"
                                    value="Refresh" style="display: none;">

                            </div>

                            <div class="productdetail-left col-12 col-lg-6 col-md-6">

                                <div class="product-quantity">
                                    <span class="control-label">Quantity : </span>
                                    <div class="qty">
                                        <div class="input-group bootstrap-touchspin"><span
                                                class="input-group-addon bootstrap-touchspin-prefix"
                                                style="display: none;"></span><input type="text" name="qty"
                                                id="quantity_wanted" value="1" class="input-group form-control" min="1"
                                                style="display: block;"><span
                                                class="input-group-addon bootstrap-touchspin-postfix"
                                                style="display: none;"></span><span
                                                class="input-group-btn-vertical"><button
                                                    class="btn btn-touchspin js-touchspin bootstrap-touchspin-up"
                                                    type="button"><i
                                                        class="material-icons touchspin-up"></i></button><button
                                                    class="btn btn-touchspin js-touchspin bootstrap-touchspin-down"
                                                    type="button"><i
                                                        class="material-icons touchspin-down"></i></button></span>
                                        </div>
                                    </div>
                                </div>

                               @include('site.includes.product_variants')

                                <div id="_mobile_productcart_detail"></div>

                                <div class="productbuttons">
                                    <div class="tabs">
                                        <h4 class="buttons_bottom_block">
                                            Information of seller
                                        </h4>
                                        <div class="seller_info">
                                            <span class="seller_name">
                                                David James
                                            </span>
                                            <div class="average_rating">
                                                <a href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/1_david-james/comments"
                                                    title="View comments about David James">
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
                                                    href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/1_david-james/">
                                                    <i class="icon-user fa fa-user"></i>
                                                    View seller profile
                                                </a>
                                            </p>
                                            <p class="link_contact_seller">
                                                <a title="Contact seller"
                                                    href="http://demo.bestprestashoptheme.com/savemart/en/module/jmarketplace/contactseller?id_seller=1&amp;id_product=1">
                                                    <i class="fa fa-comment"></i>
                                                    Contact seller
                                                </a>
                                            </p>
                                            <p class="link_seller_favorite">
                                                <a title="Add to favorite seller"
                                                    href="http://demo.bestprestashoptheme.com/savemart/en/module/jmarketplace/favoriteseller?id_seller=1&amp;id_product=1">
                                                    <i class="icon-heart fa fa-heart"></i>
                                                    Add to favorite seller
                                                </a>
                                            </p>
                                            <p class="link_seller_products">
                                                <a title="View more products of this seller"
                                                    href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/1_david-james/products">
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
                                        <button class="btn btn-link" type="button" id="social-sharingButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share
                                                With :</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                                            <a class="dropdown-item"
                                                href="http://www.facebook.com/sharer.php?u=http://demo.bestprestashoptheme.com/savemart/en/smartphone-tablet/1-hummingbird-printed-t-shirt.html"
                                                title="Share" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                            <a class="dropdown-item"
                                                href="https://twitter.com/intent/tweet?text=Nullam sed sollicitudin mauris http://demo.bestprestashoptheme.com/savemart/en/smartphone-tablet/1-hummingbird-printed-t-shirt.html"
                                                title="Tweet" target="_blank"><i class="fa fa-twitter"></i>Tweet</a>
                                            <a class="dropdown-item"
                                                href="https://plus.google.com/share?url=http://demo.bestprestashoptheme.com/savemart/en/smartphone-tablet/1-hummingbird-printed-t-shirt.html"
                                                title="Google+" target="_blank"><i
                                                    class="fa fa-google-plus"></i>Google+</a>
                                            <a class="dropdown-item"
                                                href="http://www.pinterest.com/pin/create/button/?media=http://demo.bestprestashoptheme.com/savemart/24/hummingbird-printed-t-shirt.jpg&amp;url=http://demo.bestprestashoptheme.com/savemart/en/smartphone-tablet/1-hummingbird-printed-t-shirt.html"
                                                title="Pinterest" target="_blank"><i
                                                    class="fa fa-pinterest"></i>Pinterest</a>
                                        </div>
                                    </div>


                                    <a class="btn btn-link" href="javascript:print();">
                                        <span><i class="fa fa-print" aria-hidden="true"></i>Print</span>
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
