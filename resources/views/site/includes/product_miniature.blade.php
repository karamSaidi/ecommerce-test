<div class="product-miniature js-product-miniature item-one" data-id-product="1" data-id-product-attribute="40"
    itemscope="" itemtype="http://schema.org/Product">
    <div class="thumbnail-container">

        <a href="{{ route('product.details', $product->slug) }}" class="thumbnail product-thumbnail two-image">
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

            <div class="product-title" itemprop="name"><a href="{{ route('product.details', $product->slug) }}">
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

        @include('site.includes.product_buttons')

    </div>
</div>
