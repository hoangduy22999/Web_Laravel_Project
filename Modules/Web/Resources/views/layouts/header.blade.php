<header id="site-header" class="site-header__v9 site-header__white-text fixed-top bg-carolina-light">
    <div class="masthead">
        <div class="container pt-3 pb-3">
            <div class="d-flex align-items-center position-relative flex-wrap">
                <div class="site-branding pr-7">
                    <a href="{{route('home')}}" class="d-block mb-1">
                        <img width="80" height="80" src="{{asset('web/images/logo.jpg')}}" />
                    </a>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0">
                        @if(!empty($categories))
                        <div class="input-group input-group-borderless w-100">
                            <div class="input-group-prepend border-right mr-0 d-none d-xl-block">
                                <select class="custom-select pr-7 pl-4 rounded-right-0 height-5 shadow-none border-0 text-dark bg-gray-200" id="inputGroupSelect01">
                                    <option selected="">Toàn bộ</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" class="form-control px-3 bg-gray-200 bg-focus__1" placeholder="Nhập từ khóa" aria-label="Amount (to the nearest dollar)" />
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3 py-2" type="submit"><i class="mx-1 glph-icon flaticon-loupe text-white"></i></button>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
                <div class="d-flex align-items-center mt-lg-3 mt-xl-0">
                    @if(empty($user))
                    <a
                        id="sidebarNavToggler"
                        href="javascript:;"
                        role="button"
                        aria-controls="sidebarContent"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-unfold-event="click"
                        data-unfold-hide-on-scroll="false"
                        data-unfold-target="#sidebarContent"
                        data-unfold-type="css-animation"
                        data-unfold-overlay='{
                                "className": "u-sidebar-bg-overlay",
                                "background": "rgba(0, 0, 0, .7)",
                                "animationSpeed": 500
                            }'
                        data-unfold-animation-in="fadeInRight"
                        data-unfold-animation-out="fadeOutRight"
                        data-unfold-duration="500"
                        class="target-of-invoker-has-unfolds"
                    >
                        <div class="d-flex align-items-center text-white font-size-2 text-lh-sm">
                            <i class="flaticon-user font-size-4 text-dark"></i>
                            <div class="ml-2 d-none d-lg-block">
                                <div class="text-secondary-black-100 font-size-2">Đăng nhập</div>
                            </div>
                        </div>
                    </a>
                    @else
                        <div class="nav-item dropdown">
                            <a id="pagesDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="true" data-unfold-event="hover" data-unfold-target="#pagesDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                <div class="d-flex align-items-center text-white font-size-2 text-lh-sm">
                                    <i class="flaticon-user font-size-4 text-dark"></i>
                                    <div class="ml-2 d-none d-lg-block">
                                        <div class="text-secondary-black-100 font-size-2">{{$user->name}}</div>
                                    </div>
                                </div>
                            </a>
                            <ul id="pagesDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900 u-unfold--css-animation fadeOut" aria-labelledby="pagesDropdownInvoker" style="animation-duration: 200ms; left: 0px;">
                                <li><a href="{{route('account')}}" class="dropdown-item link-black-100">Tài khoản của tôi</a></li>
                                <li><a href="{{route('web.logout')}}" class="dropdown-item link-black-100">Đăng xuất</a></li>
                            </ul>
                        </div>
                        <a
                            href="{{route('product.show-cart')}}"
                            class="ml-4 d-none d-lg-block target-of-invoker-has-unfolds"
                        >
                            <div class="d-flex align-items-center text-white font-size-2 text-lh-sm position-relative">
                                <div id="cart-item">
                                    @include('web::layouts.cart-item')
                                </div>
                                <i class="flaticon-icon-126515 font-size-4 text-secondary-black-100"></i>
                                <div class="ml-2">
                                    <div class="font-size-2 text-secondary-black-100" id="giohang">Giỏ hàng</div>
                                </div>
                            </div>
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>
