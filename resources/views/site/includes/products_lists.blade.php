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
                    @include('site.includes.product_miniature')
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
