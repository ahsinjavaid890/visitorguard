@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorguard')->first();
@endphp
<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" style="padding: 27px 14px 10px 48px;" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ url('admin/dashboard') }}">
            <img style="border-radius: 10px" alt="Logo" width="150px"
                src="{{ url('public/images') }}/{{ $settings->header_logo }}" />
        </a>
        
        <!--end::Logo-->
        <!--begin::Toggle-->

        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="{{url('admin/dashboard')}}" class="menu-link">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-section">
                    <h4 class="menu-text">MENU</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>



                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/sales/allsale') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">point_of_sale</span>    
                        <span
                        class="menu-text">All Sales  @if (DB::table('sales')->where('newstatus', 'new')->where('website', 'visitorinsure')->count() > 0)
                        <span style="margin-left: 10px;"
                            class="badge badge-danger">{{ DB::table('sales')->where('newstatus', 'new')->where('website', 'visitorinsure')->count() }}</span>
                    @endif
                    </span>
                    </a>
                </li>






                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/products/allproducts') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">inventory</span>
                        <span
                        class="menu-text">All Products
                    </span>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/contact/messages') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">business_messages</span>
                        <span class="menu-text">Contact Messages</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">COMPANY</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>


                <li class="menu-item">
                    <a href="{{ route('view_news') }}" class="menu-link">
                        <span class="material-symbols-outlined">unsubscribe</span>
                        <span class="menu-text">News Letter</span></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">help</span>
                        <span class="menu-text">FAQ</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">FAQ</span></span>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/faq/faqcategories') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">FAQ Categories</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/faq/allfaq') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">ALL FAQ</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">rss_feed</span>
                        <span class="menu-text">Blogs</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Blogs</span></span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/blogs/blogcategories') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Blogs Categories</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/blogs/allblogs') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">ALL Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/testimonials') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">point_of_sale</span>
                        <span class="menu-text">Testimonials</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">settings</span>
                        <span class="menu-text">Settings</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Settings</span></span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/settings') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Appearance</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/emailsettings') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Email Settings</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/userpanelsettings') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">User
                                        Panel & Buy Now</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/clearcache') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Clear Cache</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ url('admin/website/server-info') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">Server</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Profile</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('admin/profile') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">person</span>
                        <span class="menu-text">My Profile</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        href="{{ route('admin.logout') }}" class="menu-link menu-toggle">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="menu-text">Logout</span>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->
