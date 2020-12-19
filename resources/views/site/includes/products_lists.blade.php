<section id="products">

    <div id="nav-top">

        <div id="js-product-list-top" class="row products-selection">
            <div class="col-md-6 col-xs-6">
                <div class="change-type">
                    <span class="grid-type active" data-view-type="grid"><i class="fa fa-th-large"></i></span>
                    <span class="list-type" data-view-type="list"><i class="fa fa-bars"></i></span>
                </div>
                <div class="hidden-sm-down total-products">
                    <p>There are {{ $products->total() }} products.</p>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="d-flex sort-by-row justify-content-end">

                    <span class="hidden-sm-down sort-by">Sort by:</span>
                    <div class="products-sort-order dropdown">
                        <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span>Relevance</span>
                            <i class="material-icons pull-xs-right"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a rel="nofollow"
                                href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?order=product.position.asc"
                                class="select-list current js-search-link">
                                Relevance
                            </a>
                            <a rel="nofollow"
                                href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?order=product.name.asc"
                                class="select-list js-search-link">
                                Name, A to Z
                            </a>
                            <a rel="nofollow"
                                href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?order=product.name.desc"
                                class="select-list js-search-link">
                                Name, Z to A
                            </a>
                            <a rel="nofollow"
                                href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?order=product.price.asc"
                                class="select-list js-search-link">
                                Price, low to high
                            </a>
                            <a rel="nofollow"
                                href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?order=product.price.desc"
                                class="select-list js-search-link">
                                Price, high to low
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div id="categories-product">

        <div id="js-product-list">
            <div class="products product_list grid row" data-default-view="grid">

                @foreach ($products as $product)

                <div class="item  col-lg-4 col-md-6 col-xs-12 text-center no-padding">
                    <div class="product-miniature js-product-miniature item-one" data-id-product="1"
                        data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
                        <div class="thumbnail-container">

                            <a href="{{ route('product.details', $product->slug) }}"
                                class="thumbnail product-thumbnail two-image">
                                @include('site.includes.product_images_home', ['images' => $product->images])

                            </a>


                            <div class="product-flags new">New</div>


                        </div>
                        <div class="product-description">
                            <div class="product-groups">

                                <div class="category-title">
                                    @foreach ($product->categories as $category)
                                    <a href="{{ route('category.products', $category->slug) }}">
                                        {{ $category->name }}
                                    </a>
                                    @endforeach
                                </div>

                                <div class="group-reviews">
                                    <div class="product-comments">
                                        <div class="star_content">
                                            <div class="star star"></div>
                                            <div class="star star"></div>
                                            <div class="star star"></div>
                                            <div class="star star"></div>
                                            <div class="star star"></div>
                                        </div>
                                        <span>5 review</span>
                                    </div>
                                    <p class="seller_name">
                                        <a title="View seller profile"
                                            href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/1_david-james/">
                                            <i class="fa fa-user"></i>
                                            David James
                                        </a>
                                    </p>

                                    <div class="info-stock ml-auto">
                                        <label class="control-label">Availability:</label>
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        {{ $product->in_stock? 'in stock' : 'out of stock' }}
                                    </div>
                                </div>

                                <div class="product-title" itemprop="name"><a
                                        href="{{ route('product.details', $product->slug) }}">
                                        {{ $product->name }}</a></div>

                                <div class="product-group-price">

                                    <div class="product-price-and-shipping">

                                        @if($product->special_price)
                                        <span itemprop="price" class="price">{{ $product->special_price?? '' }}</span>
                                        <span class="regular-price">{{ $product->price }}</span>
                                        @else
                                        <span itemprop="price" class="price">{{ $product->price }}</span>
                                        @endif

                                    </div>

                                </div>
                                <div class="product-desc" itemprop="desciption">{{ $product->short_description }}</div>
                            </div>
                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope=""
                                itemtype="http://schema.org/Offer">
                                <form action="http://demo.bestprestashoptheme.com/savemart/en/cart" method="post"
                                    class="formAddToCart">
                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                                    <input type="hidden" name="id_product" value="1">
                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                            class="novicon-cart"></i><span>Add to cart</span></a>
                                </form>

                                <a class="addToWishlist " href="#" data-rel="1" data-product-id="{{ $product->id }}">
                                    <i class="fa fa-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <a href="#" class="quick-view hidden-sm-down" data-product-id="{{ $product->id }}">
                                    <i class="fa fa-search"></i><span> Quick view</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('site.includes.product_quick_view', ['product' => $product])

                @endforeach

            </div>
        </div>

    </div>


    <div id="js-product-list-bottom">

        <nav class="pagination row justify-content-around">
            <div class="col col-xs-12 col-lg-6 col-md-12">

                <span class="showing">
                    Showing 1-12 of 18 item(s)
                </span>

            </div>
            <div class="col col-xs-12 col-lg-6 col-md-12">

                <ul class="page-list">
                    <li class="current">
                        <a rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking"
                            class="disabled js-search-link">
                            1
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow"
                            href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?page=2"
                            class="js-search-link">
                            2
                        </a>
                    </li>
                    <li>
                        <a rel="next"
                            href="http://demo.bestprestashoptheme.com/savemart/en/3-computer-networking?page=2"
                            class="next js-search-link">
                            Next
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

    </div>


</section>
