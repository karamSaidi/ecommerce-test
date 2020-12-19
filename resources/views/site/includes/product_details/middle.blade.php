<div class="product-detail-middle">
    <div class="container">
        <div class="row">
            <div class="tabs col-lg-9 col-md-7 ">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description">الوصف</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-details">Product Detail</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#reviews">Write Your Own Review<span
                                class="count-comment"> (0)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-custom">Custom Tab</a>
                    </li> --}}

                </ul>

                <div class="tab-content" id="tab-content">
                    <div class="tab-pane fade in active" id="description">

                        <div class="product-description">
                            {!! $product->description !!}
                        </div>

                    </div>

                    <div class="tab-pane fade" id="product-details"
                        data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;2&quot;,&quot;id_supplier&quot;:&quot;0&quot;,&quot;reference&quot;:&quot;demo_5&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;delivery_in_stock&quot;:&quot;&quot;,&quot;delivery_out_stock&quot;:&quot;&quot;,&quot;id_category_default&quot;:&quot;4&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:0,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;low_stock_threshold&quot;:null,&quot;low_stock_alert&quot;:&quot;0&quot;,&quot;price&quot;:&quot;18.00\u00a0UK\u00a3&quot;,&quot;unity&quot;:&quot;&quot;,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;404&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;112&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2018-07-13 03:39:59&quot;,&quot;date_upd&quot;:&quot;2018-08-29 04:21:24&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;meta_keywords&quot;:&quot;&quot;,&quot;meta_title&quot;:&quot;&quot;,&quot;link_rewrite&quot;:&quot;the-adventure-begins-framed-poster&quot;,&quot;name&quot;:&quot;Maecenas vulputate ligula vel&quot;,&quot;description&quot;:&quot;<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<\/p>\r\n<h3>Lorem ipsum dolor sit amet<\/h3>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-1.jpg\&quot; alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-2.jpg\&quot; alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br \/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>&quot;,&quot;description_short&quot;:&quot;<p>Maecenas vulputate ligula vel ante luctus, non scelerisque ipsum viverra. Aenean gravida nisl enim, non pretium velit volutpat nec. Sed dapibus nulla ac enim mollis, eget tempus augue vestibulum. Donec at metus eu magna volutpat fringilla. Nulla tincidunt efficitur lectus et euismod.<\/p>&quot;,&quot;available_now&quot;:&quot;in stock&quot;,&quot;available_later&quot;:&quot;out stock&quot;,&quot;id&quot;:4,&quot;id_product&quot;:4,&quot;out_of_stock&quot;:2,&quot;new&quot;:1,&quot;id_product_attribute&quot;:112,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;category&quot;:&quot;home-appliance&quot;,&quot;category_name&quot;:&quot;Home Appliance&quot;,&quot;link&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/home-appliance\/4-the-adventure-begins-framed-poster.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:15,&quot;price_without_reduction&quot;:18,&quot;reduction&quot;:0,&quot;specific_prices&quot;:false,&quot;quantity&quot;:93,&quot;quantity_all_versions&quot;:1592,&quot;id_image&quot;:&quot;ar-default&quot;,&quot;features&quot;:[],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;1&quot;:{&quot;id_attribute&quot;:&quot;1&quot;,&quot;id_attribute_group&quot;:&quot;1&quot;,&quot;name&quot;:&quot;\u0635&quot;,&quot;group&quot;:&quot;\u0627\u0644\u062d\u062c\u0645&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;},&quot;2&quot;:{&quot;id_attribute&quot;:&quot;9&quot;,&quot;id_attribute_group&quot;:&quot;2&quot;,&quot;name&quot;:&quot;\u0627\u0628\u064a\u0636 \u0645\u0637\u0641\u064a&quot;,&quot;group&quot;:&quot;\u0627\u0644\u0644\u0648\u0646:&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;}},&quot;rate&quot;:20,&quot;tax_name&quot;:&quot;VAT UK 20%&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:&quot;&quot;,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;\u0639\u0646\u0627\u0635\u0631&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0,&quot;images&quot;:[{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-small_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-home_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;39&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;112&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-small_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-home_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/43-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;43&quot;,&quot;position&quot;:&quot;2&quot;,&quot;associatedVariants&quot;:[&quot;112&quot;,&quot;106&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-small_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-home_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/41-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;41&quot;,&quot;position&quot;:&quot;3&quot;,&quot;associatedVariants&quot;:[&quot;112&quot;,&quot;106&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-small_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-home_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/42-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;42&quot;,&quot;position&quot;:&quot;4&quot;,&quot;associatedVariants&quot;:[&quot;112&quot;,&quot;106&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-small_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-home_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/40-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;40&quot;,&quot;position&quot;:&quot;5&quot;,&quot;associatedVariants&quot;:[&quot;112&quot;]}],&quot;cover&quot;:{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-small_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-home_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-cart_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-medium_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/39-large_default\/the-adventure-begins-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;39&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;112&quot;]},&quot;has_discount&quot;:false,&quot;discount_type&quot;:null,&quot;discount_percentage&quot;:null,&quot;discount_percentage_absolute&quot;:null,&quot;discount_amount&quot;:null,&quot;discount_amount_to_display&quot;:null,&quot;price_amount&quot;:18,&quot;unit_price_full&quot;:&quot;&quot;,&quot;show_availability&quot;:true,&quot;availability_date&quot;:null,&quot;availability_message&quot;:&quot;in stock&quot;,&quot;availability&quot;:&quot;available&quot;}">

                        <div class="product-manufacturer">
                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/2_vivamus-aliquet">
                                <img src="{{ $product->brand->image_url }}"
                                    class="img img-thumbnail manufacturer-logo">
                            </a>
                        </div>
                        <div class="product-reference">
                            <label class="label">brand </label>
                            <span itemprop="sku">{{ $product->brand->name }}</span>
                        </div>

                        <div class="product-price">
                            <label class="label">price </label>
                            @if($product->special_price)
                            <span itemprop="price"
                                class="price">{{ $product->special_price?? '' }}</span>
                            <span class="regular-price">{{ $product->price }}</span>
                            @else
                            <span itemprop="price" class="price">{{ $product->price }}</span>
                            @endif
                        </div>



                        <div class="product-quantities">
                            <label class="control-label">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                {{ $product->in_stock? 'in stock' : 'out of stock' }}
                            </label>

                            @if ($product->manage_stock)
                            <span>{{ $product->qty }} عناصر</span>
                            @endif
                        </div>


                        <div class="product-out-of-stock">

                        </div>


                        <div class="pro-cate">
                            <label class="control-label">Categories:</label>
                            <div>
                                @foreach ($product->categories as $category)
                                <span>
                                    <a href="{{ route('admin.categories', $category->slug) }}"
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



                        <section class="product-features">
                            <h3>مراجع محددة</h3>
                            <dl class="data-sheet">
                            </dl>
                        </section>




                    </div>





                    {{-- <script type="text/javascript">
                        var novproductcomments_controller_url = 'http://demo.bestprestashoptheme.com/savemart/ar/module/novproductcomments/default';
                        var confirm_report_message = 'Are you sure that you want to report this comment?';
                        var secure_key = 'c0d88cffbca7857951c1805219eba7c2';
                        var novproductcomments_url_rewrite = '1';
                        var productcomment_added = 'Your comment has been added!';
                        var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
                        var productcomment_title = 'New comment';
                        var productcomment_ok = 'OK';
                        var moderation_active = 1;
                    </script>

                    <div class="tab-pane fade in" id="reviews">
                        <p class="text-center mt-10">
                            <a id="new_comment_tab_btn" class="open-comment-form" data-toggle="modal"
                                data-target="#new_comment_form" href="#">Be the first to write your review !</a>
                        </p>

                    </div>


                    <div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-xs-center"><i class="fa fa-edit"></i> Write your review
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="material-icons close">close</i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="id_new_comment_form" action="#">
                                        <div class="product row no-gutters">
                                            <div class="product-image col-4">
                                                <img class="img-fluid"
                                                    src="http://demo.bestprestashoptheme.com/savemart/39-medium_default/the-adventure-begins-framed-poster.jpg"
                                                    height="" width="" alt="Maecenas vulputate ligula vel">
                                            </div>
                                            <div class="product_desc col-8">
                                                <p class="product_name">Maecenas vulputate ligula vel</p>
                                                <p>Maecenas vulputate ligula vel ante luctus, non scelerisque ipsum
                                                    viverra. Aenean gravida nisl enim, non pretium velit volutpat nec.
                                                    Sed dapibus nulla ac enim mollis, eget tempus augue vestibulum.
                                                    Donec at metus eu magna volutpat fringilla. Nulla tincidunt
                                                    efficitur lectus et euismod.</p>
                                            </div>
                                        </div>
                                        <div class="new_comment_form_content">
                                            <div id="new_comment_form_error" class="error alert alert-danger">
                                                <ul></ul>
                                            </div>
                                            <ul id="criterions_list">
                                                <li>
                                                    <label>Quality</label>
                                                    <div class="star_content">
                                                        <input type="hidden" name="criterion[1]" value="5">
                                                        <div class="cancel"><a title="Cancel Rating"></a></div>
                                                        <div class="star star_on"><a title="1">1</a></div>
                                                        <div class="star star_on"><a title="2">2</a></div>
                                                        <div class="star star_on"><a title="3">3</a></div>
                                                        <div class="star star_on"><a title="4">4</a></div>
                                                        <div class="star star_on"><a title="5">5</a></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                            <label for="comment_title">Title for your review<sup
                                                    class="required">*</sup></label>
                                            <input id="comment_title" name="title" type="text" value="">

                                            <label for="content">Your review<sup class="required">*</sup></label>
                                            <textarea id="content" name="content"></textarea>

                                            <label>Your name<sup class="required">*</sup></label>
                                            <input id="commentCustomerName" name="customer_name" type="text" value="">

                                            <div id="new_comment_form_footer">
                                                <input id="id_product_comment_send" name="id_product" type="hidden"
                                                    value="4">
                                                <div class="fl"><sup class="required">*</sup> Required fields</div>
                                                <div class="fr">
                                                    <button id="submitNewMessage" data-dismiss="modal"
                                                        aria-label="Close" class="btn btn-primary" name="submitMessage"
                                                        type="submit">ارسل</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- /end new_comment_form_content -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade in" id="tab-custom">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies.
                            Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac
                            pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales
                            nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut
                            commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id
                            pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur
                            aliquam magna ac tristique</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies.
                            Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac
                            pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales
                            nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut
                            commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id
                            pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur
                            aliquam magna ac tristique</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies.
                            Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac
                            pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales
                            nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut
                            commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id
                            pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur
                            aliquam magna ac tristique</p>
                    </div> --}}

                </div>
            </div>


            <div class="col-lg-3 col-md-5">

                <div
                    class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
                    <div class="block block-product clearfix">
                        <h2 class="title_block">
                            Bestseller
                        </h2>
                        <div class="block_content">
                            <div id="productlist464005090"
                                class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag"
                                data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0"
                                data-dots="false" data-nav="true" data-items="1" data-items_large="1"
                                data-items_tablet="1" data-items_mobile="1">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;">
                                        <div class="owl-item active lastActiveItem" style="width: 270px;">
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                    data-id-product="1" data-id-product-attribute="40" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam
                                                                        sed sollicitudin mauris</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">24.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                    data-id-product="2" data-id-product-attribute="60" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem
                                                                        ipsum dolor sit amet ege</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">36.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                    data-id-product="3" data-id-product-attribute="95" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
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
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris
                                                                        molestie porttitor diam</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">30.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 270px;">
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                    data-id-product="4" data-id-product-attribute="112" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas
                                                                        vulputate ligula vel</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">18.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                    data-id-product="5" data-id-product-attribute="134" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
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
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula
                                                                        vel tempus sit amet ulte</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">34.80&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                    data-id-product="6" data-id-product-attribute="0" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam
                                                                        tempor orci eu pretium</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">14.28&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
                    <div class="block block-product clearfix">
                        <h2 class="title_block">
                            TRENDING NOW
                        </h2>
                        <div class="block_content">
                            <div id="productlist181242353"
                                class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag"
                                data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0"
                                data-dots="false" data-nav="true" data-items="1" data-items_large="1"
                                data-items_tablet="1" data-items_mobile="1">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;">
                                        <div class="owl-item active lastActiveItem" style="width: 270px;">
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                    data-id-product="1" data-id-product-attribute="40" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam
                                                                        sed sollicitudin mauris</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">24.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                    data-id-product="2" data-id-product-attribute="60" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem
                                                                        ipsum dolor sit amet ege</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">36.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                    data-id-product="3" data-id-product-attribute="95" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
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
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris
                                                                        molestie porttitor diam</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">30.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 270px;">
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                    data-id-product="4" data-id-product-attribute="112" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas
                                                                        vulputate ligula vel</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">18.00&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                    data-id-product="6" data-id-product-attribute="0" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam
                                                                        tempor orci eu pretium</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">14.28&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                    data-id-product="7" data-id-product-attribute="155" itemscope=""
                                                    itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر"
                                                                class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"
                                                                    width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                    src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg"
                                                                    alt=""
                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"
                                                                    width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
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



                                                                <div class="product-title" itemprop="name"><a
                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec
                                                                        non lectus ac erat sedei</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price"
                                                                            class="price">14.28&nbsp;UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nov-html col-xl-12 col-lg-12 col-md-12 policy-product no-padding">
                    <div class="block">
                        <div class="block_content">
                            <div class="policy-row d-flex">
                                <div class="icon-policy"><i class="noviconpolicy noviconpolicy-1">1</i></div>
                                <div class="policy-content">
                                    <div class="policy-name">Free Delivery</div>
                                    <div class="policy-des">From $ 250</div>
                                </div>
                            </div>
                            <div class="policy-row d-flex">
                                <div class="icon-policy"><i class="noviconpolicy noviconpolicy-2">2</i></div>
                                <div class="policy-content">
                                    <div class="policy-name">Money Back</div>
                                    <div class="policy-des">Guarantee</div>
                                </div>
                            </div>
                            <div class="policy-row d-flex">
                                <div class="icon-policy"><i class="noviconpolicy noviconpolicy-3">3</i></div>
                                <div class="policy-content">
                                    <div class="policy-name">Authenticity</div>
                                    <div class="policy-des">100% guaranteed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
