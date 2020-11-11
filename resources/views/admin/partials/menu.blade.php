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
                </ul>
            </li>
            {{-- *********************** ./settings --}}

            {{-- *********************** categories --}}
            <li class="nab-item">
                <a href="{{route('admin.main_categories')}}">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.categories">{{__('admin/menu.categories')}}</span>
                </a>
                <ul class="menu-content">

                    <li class="@if(request()->is('*admin/main-categories/index')) active @else nav-item @endif">
                        <a href="{{route('admin.main_categories')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title"
                                data-i18n="nav.categories.list">{{__('admin/menu.main_categories_list')}}</span>
                        </a>
                    </li>
                    <li class="@if(request()->is('*admin/main-categories/sub')) active @else nav-item @endif">
                        <a href="{{route('admin.main_categories.sub')}}">
                            <i class="la la-list"></i>
                            <span class="menu-title"
                                data-i18n="nav.categories.list">{{__('admin/menu.sub_categories_list')}}</span>
                        </a>
                    </li>
                    <li class="@if(request()->is('*admin/main-categories/create')) active @else nav-item @endif">
                        <a href="{{route('admin.main_categories.create')}}">
                            <i class="la la-plus"></i>
                            <span class="menu-title"
                                data-i18n="nav.categories.create">{{__('admin/menu.categories_create')}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- *********************** ./categories --}}




        </ul>
    </div>
</div>
