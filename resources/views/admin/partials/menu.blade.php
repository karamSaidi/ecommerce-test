<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="@if(request()->is('*admin/dashboard')) active @else nav-item @endif ">
                <a href="{{route('admin.dashboard')}}" class="menu-item">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dashboard">{{__('admin/menu.dashboard')}}</span>
                </a>
            </li>

            {{-- *********************** settings --}}
            <li class="nab-item">
                <a href="{{route('admin.dashboard')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.settings">{{__('admin/menu.settings')}}</span>
                </a>
                <ul class="menu-content">
                    {{-- *********************** shipping --}}
                    <li class="nav-item">
                        <a href="{{route('admin.settings.shipping.edit')}}">
                            <i class="la la-truck"></i>
                            <span class="menu-title"
                                data-i18n="nav.settings.shipping">{{__('admin/menu.shipping_methods')}}</span>
                        </a>
                        <ul class="menu-content">
                            <li
                                class="@if(request()->is('*admin/settings/shipping') || request()->is('*admin/settings/shipping/free')) active @else nav-item @endif ">
                                <a href="{{route('admin.settings.shipping.edit', 'free')}}">
                                    <span class="menu-title"
                                        data-i18n="nav.settings.shipping.free">{{__('admin/menu.shipping_free')}}</span>
                                </a>
                            </li>
                            <li
                                class="@if(request()->is('*admin/settings/shipping/local')) active @else nav-item @endif ">
                                <a href="{{route('admin.settings.shipping.edit', 'local')}}">
                                    <span class="menu-title"
                                        data-i18n="nav.settings.shipping.local">{{__('admin/menu.shipping_local')}}</span>
                                </a>
                            </li>
                            <li
                                class="@if(request()->is('*admin/settings/shipping/outer')) active @else nav-item @endif ">
                                <a href="{{route('admin.settings.shipping.edit', 'outer')}}">
                                    <span class="menu-title"
                                        data-i18n="nav.settings.shipping.outer">{{__('admin/menu.shipping_outer')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- *********************** ./shipping --}}
                    {{-- *********************** sliders --}}
                    <li class="@if(request()->is('*admin/sliders/index')) active @else nav-item @endif">
                        <a href="{{route('admin.sliders')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title"
                                data-i18n="nav.settings.sliders">{{__('admin/menu.sliders')}}</span>
                        </a>
                    </li>
                    {{-- *********************** ./sliders --}}
                </ul>
            </li>
            {{-- *********************** ./settings --}}

            {{-- *********************** categories --}}
            <li class="nab-item">
                <a href="{{route('admin.categories')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.categories">{{__('admin/menu.categories')}}</span>
                </a>
                <ul class="menu-content">

                    <li class="@if(request()->is('*admin/categories/index')) active @else nav-item @endif">
                        <a href="{{route('admin.categories')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title"
                                data-i18n="nav.categories.list">{{__('admin/menu.categories_list')}}</span>
                        </a>
                    </li>

                    <li class="@if(request()->is('*admin/categories/create')) active @else nav-item @endif">
                        <a href="{{route('admin.categories.create')}}">
                            <i class="la la-plus"></i>
                            <span class="menu-title"
                                data-i18n="nav.categories.create">{{__('admin/menu.categories_create')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- *********************** ./categories --}}

            {{-- *********************** brands --}}
            <li class="nab-item">
                <a href="{{route('admin.brands')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.brands">{{__('admin/menu.brands')}}</span>
                </a>
                <ul class="menu-content">

                    <li class="@if(request()->is('*admin/brands/index')) active @else nav-item @endif">
                        <a href="{{route('admin.brands')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title" data-i18n="nav.brands.list">{{__('admin/menu.brands_list')}}</span>
                        </a>
                    </li>

                    <li class="@if(request()->is('*admin/brands/create')) active @else nav-item @endif">
                        <a href="{{route('admin.brands.create')}}">
                            <i class="la la-plus"></i>
                            <span class="menu-title"
                                data-i18n="nav.brands.create">{{__('admin/menu.brands_create')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- *********************** ./brands --}}

            {{-- *********************** tags --}}
            <li class="nab-item">
                <a href="{{route('admin.tags')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.tags">{{__('admin/menu.tags')}}</span>
                </a>
                <ul class="menu-content">

                    <li class="@if(request()->is('*admin/tags/index')) active @else nav-item @endif">
                        <a href="{{route('admin.tags')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title" data-i18n="nav.tags.list">{{__('admin/menu.tags_list')}}</span>
                        </a>
                    </li>

                    <li class="@if(request()->is('*admin/tags/create')) active @else nav-item @endif">
                        <a href="{{route('admin.tags.create')}}">
                            <i class="la la-plus"></i>
                            <span class="menu-title" data-i18n="nav.tags.create">{{__('admin/menu.tags_create')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- *********************** ./tags --}}

            {{-- *********************** products --}}
            <li class="nab-item">
                <a href="{{route('admin.products')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.products">{{__('admin/menu.products')}}</span>
                </a>
                <ul class="menu-content">

                    <li class="@if(request()->is('*admin/products/index')) active @else nav-item @endif">
                        <a href="{{route('admin.products')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title" data-i18n="nav.products.list">{{__('admin/menu.products_list')}}</span>
                        </a>
                    </li>

                    <li class="@if(request()->is('*admin/products/create-general-information')) active @else nav-item @endif">
                        <a href="{{route('admin.products_general.create')}}">
                            <i class="la la-plus"></i>
                            <span class="menu-title" data-i18n="nav.products.create">{{__('admin/menu.products_create')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- *********************** ./products --}}


            {{-- *********************** attributes --}}
            <li class="nab-item">
                <a href="{{route('admin.attributes')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.attributes">{{__('admin/menu.attributes')}}</span>
                </a>
                <ul class="menu-content">

                    <li class="@if(request()->is('*admin/attributes/index')) active @else nav-item @endif">
                        <a href="{{route('admin.attributes')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title" data-i18n="nav.attributes.list">{{__('admin/menu.attributes_list')}}</span>
                        </a>
                    </li>

                    <li class="@if(request()->is('*admin/attributes/create')) active @else nav-item @endif">
                        <a href="{{route('admin.attributes.create')}}">
                            <i class="la la-plus"></i>
                            <span class="menu-title" data-i18n="nav.attributes.create">{{__('admin/menu.attributes_create')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- *********************** ./attributes --}}


        </ul>
    </div>
</div>
