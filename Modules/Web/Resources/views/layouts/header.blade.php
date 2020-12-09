<header id="site-header" class="site-header__v9 site-header__white-text">
    <div class="masthead">
        <div class="container pt-3 pt-md-4 pb-3 pb-md-5">
            <div class="d-flex align-items-center position-relative flex-wrap">
                <div class="site-branding pr-7">
                    <a href="{{route('home')}}" class="d-block mb-1">
                        <img width="80" height="80" src="https://www.massen.lu/wp-content/uploads/mediastore_logo_neu.jpg" />
                    </a>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0">
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
                    </form>
                </div>
                <div class="d-flex align-items-center mt-lg-3 mt-xl-0">
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

                    <a
                        id="sidebarNavToggler1"
                        href="javascript:;"
                        role="button"
                        class="ml-4 d-none d-lg-block target-of-invoker-has-unfolds"
                        aria-controls="sidebarContent1"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-unfold-event="click"
                        data-unfold-hide-on-scroll="false"
                        data-unfold-target="#sidebarContent1"
                        data-unfold-type="css-animation"
                        data-unfold-overlay='{
                                "className": "u-sidebar-bg-overlay",
                                "background": "rgba(0, 0, 0, .7)",
                                "animationSpeed": 500
                            }'
                        data-unfold-animation-in="fadeInRight"
                        data-unfold-animation-out="fadeOutRight"
                        data-unfold-duration="500"
                    >
                        <div class="d-flex align-items-center text-white font-size-2 text-lh-sm position-relative">
                            <span class="position-absolute width-16 height-16 rounded-circle d-flex align-items-center justify-content-center bg-dark-1 text-white font-size-n9 left-0 top-0 ml-n2 mt-n1">3</span>
                            <i class="flaticon-icon-126515 font-size-4 text-secondary-black-100"></i>
                            <div class="ml-2">
                                {{--                                <span class="text-secondary-gray-1080 font-size-1">Giỏ hàng</span>--}}
                                <div class="font-size-2 text-secondary-black-100">Giỏ hàng</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
