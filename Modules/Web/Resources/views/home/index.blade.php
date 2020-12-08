@extends("web::layouts.master")

@section("content")

    <section class="mb-8">
        <div class="container">
            <div class="pt-5 pb-5">
                <div class="bg-img-hero img-fluid rounded-md" style="background-image: url({{asset('web/images/img1-bg.jpg')}});">
                    <div
                        class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-5 position-absolute left-0 right-0"
                        data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow--v4 u-slick__arrow-centered--y"
                        data-arrow-left-classes="flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left text-gray-360 ml-lg-3"
                        data-arrow-right-classes="flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right text-dark mr-lg-3"
                    >
                        <div
                            class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow--v4 u-slick__arrow-centered--y flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left text-gray-360 ml-lg-3 slick-arrow slick-disabled"
                            aria-disabled="true"
                            style=""
                        ></div>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 5600px; transform: translate3d(0px, 0px, 0px);">
                                <div
                                    class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530 slick-slide slick-current slick-active"
                                    data-slick-index="0"
                                    aria-hidden="false"
                                    style="width: 1400px; height: auto;"
                                    tabindex="0"
                                    role="tabpanel"
                                    id="slick-slide00"
                                    aria-describedby="slick-slide-control00"
                                >
                                    <div class="max-width-565 my-auto">
                                        <div class="media">
                                            <div class="media-body align-self-center mb-4 mb-lg-0">
                                                <p
                                                    class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2 animated fadeInUp"
                                                    data-scs-animation-in="fadeInUp"
                                                    data-scs-animation-delay="200"
                                                    style="animation-delay: 200ms; opacity: 1;"
                                                >
                                                    THE BOOKWORM EDITORS’
                                                </p>
                                                <h2 class="font-size-15 mb-3 pb-1 animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="animation-delay: 300ms; opacity: 1;">
                                                    <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                                    <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                                </h2>
                                                <a
                                                    href="#v3.html"
                                                    class="banner_btn btn btn-wide bg-dark text-white rounded-xs animated fadeInLeft"
                                                    data-scs-animation-in="fadeInLeft"
                                                    data-scs-animation-delay="400"
                                                    tabindex="0"
                                                    style="animation-delay: 400ms; opacity: 1;"
                                                >
                                                    See More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530 slick-slide"
                                    data-slick-index="1"
                                    aria-hidden="true"
                                    style="width: 1400px; height: auto;"
                                    tabindex="-1"
                                    role="tabpanel"
                                    id="slick-slide01"
                                    aria-describedby="slick-slide-control01"
                                >
                                    <div class="max-width-565 my-auto">
                                        <div class="media">
                                            <div class="media-body align-self-center mb-4 mb-lg-0">
                                                <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                                <h2 class="font-size-15 mb-3 pb-1" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                                    <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                                    <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                                </h2>
                                                <a href="#v3.html" class="banner_btn btn btn-wide bg-dark text-white rounded-xs" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="-1">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530 slick-slide"
                                    data-slick-index="2"
                                    aria-hidden="true"
                                    style="width: 1400px; height: auto;"
                                    tabindex="-1"
                                    role="tabpanel"
                                    id="slick-slide02"
                                    aria-describedby="slick-slide-control02"
                                >
                                    <div class="max-width-565 my-auto">
                                        <div class="media">
                                            <div class="media-body align-self-center mb-4 mb-lg-0">
                                                <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                                <h2 class="font-size-15 mb-3 pb-1" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                                    <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                                    <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                                </h2>
                                                <a href="#v3.html" class="banner_btn btn btn-wide bg-dark text-white rounded-xs" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="-1">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530 slick-slide"
                                    data-slick-index="3"
                                    aria-hidden="true"
                                    style="width: 1400px; height: auto;"
                                    tabindex="-1"
                                    role="tabpanel"
                                    id="slick-slide03"
                                    aria-describedby="slick-slide-control03"
                                >
                                    <div class="max-width-565 my-auto">
                                        <div class="media">
                                            <div class="media-body align-self-center mb-4 mb-lg-0">
                                                <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THE BOOKWORM EDITORS’</p>
                                                <h2 class="font-size-15 mb-3 pb-1" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                                    <span class="hero__title-line-1 font-weight-normal d-block">Feature Books Of The </span>
                                                    <span class="hero__title-line-2 font-weight-bold d-block">Fabruary</span>
                                                </h2>
                                                <a href="#v3.html" class="banner_btn btn btn-wide bg-dark text-white rounded-xs" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="-1">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow--v4 u-slick__arrow-centered--y flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right text-dark mr-lg-3 slick-arrow"
                            style=""
                            aria-disabled="false"
                        ></div>
                        <ul class="js-pagination d-lg-none text-center u-slick__pagination mt-5 position-absolute left-0 right-0" style="display: block;" role="tablist">
                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom-3">
        <div class="container">
            <header class="d-md-flex justify-content-between align-items-center mb-5">
                <h2 class="font-size-7 mb-4 mb-md-0">Trending Books</h2>
                <a href="#v3.html" class="d-flex align-items-center h-primary">View All<span class="flaticon-next font-size-3 ml-2"></span></a>
            </header>
            <ul class="products list-unstyled mb-0 row row-cols-2 row-cols-md-3 row-cols-xl-4 row-cols-wd-5">
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img1.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Paperback</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="#single-product-v3.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img2.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Kindle Edition</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="#single-product-v3.html">The Overdue Life of Amy Byler</a></h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/hop/single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img3.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/hop/single-product-v3.html">Paperback</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/hop/single-product-v3.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img4.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Kindle Edition</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="#single-product-v3.html">The Overdue Life of Amy Byler</a></h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <div class="position-relative">
                                        <a href="#single-product-v3.html" class="d-block">
                                            <img src="{{asset('web/images/img5.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                        </a>
                                        <span class="badge badge-md badge-primary-green position-absolute badge-pos--top-right text-white rounded-circle d-flex flex-column align-items-center justify-content-center">21% </span>
                                    </div>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Paperback</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="#single-product-v3.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5 mb-lg-0">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img6(1).jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Kindle Edition</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="#single-product-v3.html">The Overdue Life of Amy Byler</a></h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img7.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Paperback</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="#single-product-v3.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img8.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Kindle Edition</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="#single-product-v3.html">The Overdue Life of Amy Byler</a></h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col d-xl-none d-wd-block">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img9.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Paperback</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="#single-product-v3.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col d-xl-none d-wd-block">
                    <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="#single-product-v3.html" class="d-block">
                                        <img src="{{asset('web/images/img10.jpg')}}" class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" />
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html">Kindle Edition</a></div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="#single-product-v3.html">The Overdue Life of Amy Byler</a></h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700">Kelly Harms</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="#single-product-v3.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="#single-product-v3.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="#single-product-v3.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="mb-8">
        <div class="space-bottom-3 space-bottom-lg-4">
            <div class="container">
                <header class="mb-5 d-md-flex align-items-center">
                    <h2 class="font-size-7 mb-3 mb-md-0">Deals of the week</h2>
                    <div class="mb-3 mb-md-0 ml-md-4 bg-primary rounded-md py-1 text-lh-lg px-3 d-flex text-white font-weight-medium">
                        <div class="days mx-2">114</div>
                        <div class="hrs mx-2">03</div>
                        <div class="min mx-2">60</div>
                        <div class="sec mx-2">25</div>
                    </div>
                    <a href="#v3.html" class="h-primary d-block ml-auto">View All <i class="glyph-icon flaticon-next"></i></a>
                </header>
                <div
                    class="js-slick-carousel u-slick u-slick--gutters-3 products slick-initialized slick-slider slick-dotted"
                    data-pagi-classes="text-center u-slick__pagination mt-7 position-absolute right-0 left-0"
                    data-slides-show="3"
                    data-responsive='[{
                       "breakpoint": 1199,
                       "settings": {
                         "slidesToShow": 2
                       }
                    }, {
                       "breakpoint": 992,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }, {
                       "breakpoint": 554,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }]'
                >
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 3346px; transform: translate3d(0px, 0px, 0px);">
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide slick-current slick-active"
                                data-slick-index="0"
                                aria-hidden="false"
                                style="width: 444.25px; height: auto;"
                                tabindex="0"
                                role="tabpanel"
                                id="slick-slide10"
                                aria-describedby="slick-slide-control10"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="0"><img src="{{asset('web/images/img1(5).jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="0">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="0">The Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="0">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide slick-active"
                                data-slick-index="1"
                                aria-hidden="false"
                                style="width: 444.25px; height: auto;"
                                tabindex="0"
                                role="tabpanel"
                                id="slick-slide11"
                                aria-describedby="slick-slide-control11"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="0"><img src="{{asset('web/images/img2(1).jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="0">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="0">The Ride of a Lifetime: Lessons Learned from 15 Years as CEO</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="0">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide slick-active"
                                data-slick-index="2"
                                aria-hidden="false"
                                style="width: 444.25px; height: auto;"
                                tabindex="0"
                                role="tabpanel"
                                id="slick-slide12"
                                aria-describedby="slick-slide-control12"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="0"><img src="{{asset('web/images/img3(1).jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="0">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="0">Russians Among Us: Sleeper Cells, Ghost Stories, and the Hunt</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="0">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide"
                                data-slick-index="3"
                                aria-hidden="true"
                                style="width: 444.25px; height: auto;"
                                tabindex="-1"
                                role="tabpanel"
                                id="slick-slide13"
                                aria-describedby="slick-slide-control13"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="-1"><img src="{{asset('web/images/img4(1).jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="-1">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="-1">The Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="-1">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide"
                                data-slick-index="4"
                                aria-hidden="true"
                                style="width: 444.25px; height: auto;"
                                tabindex="-1"
                                role="tabpanel"
                                id="slick-slide14"
                                aria-describedby="slick-slide-control14"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="-1"><img src="{{asset('web/images/img5(1).jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="-1">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="-1">The Ride of a Lifetime: Lessons Learned from 15 Years as CEO</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="-1">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide"
                                data-slick-index="5"
                                aria-hidden="true"
                                style="width: 444.25px; height: auto;"
                                tabindex="-1"
                                role="tabpanel"
                                id="slick-slide15"
                                aria-describedby="slick-slide-control15"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="-1"><img src="{{asset('web/images/img6.jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="-1">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="-1">Russians Among Us: Sleeper Cells, Ghost Stories, and the Hunt</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="-1">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product product__card product__space product__space-primary border rounded-md bg-white slick-slide"
                                data-slick-index="6"
                                aria-hidden="true"
                                style="width: 444.25px; height: auto;"
                                tabindex="-1"
                                role="tabpanel"
                                id="slick-slide16"
                                aria-describedby="slick-slide-control16"
                            >
                                <div class="media p-3 p-md-4d875">
                                    <a href="#single-product-v3.html" class="d-block" tabindex="-1"><img src="{{asset('web/images/img7(1).jpg')}}" alt="image-description" /></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="#single-product-v3.html" tabindex="-1">Hard Cover</a></div>
                                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                            <a href="#single-product-v3.html" tabindex="-1">The Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#authors-single.html" class="text-gray-700" tabindex="-1">Hillary Burton</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-3">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                                <span>Already Sold: 14</span>
                                            </div>
                                            <div class="progress height-7">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 82%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="js-pagination text-center u-slick__pagination mt-7 position-absolute right-0 left-0" style="" role="tablist">
                        <li class="slick-active slick-current" role="presentation"><span></span></li>
                        <li role="presentation"><span></span></li>
                        <li role="presentation"><span></span></li>
                        <li role="presentation"><span></span></li>
                        <li role="presentation"><span></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
