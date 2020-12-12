@extends("web::layouts.master")

@section("content")
    <main id="content" class="mt-13">
        <div class="container">
            <div class="row">
                <div class="col-md-2 border-right">
                    <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Tài khoản của tôi</h6>
                    <div class="tab-wrapper">
                        <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Thông tin cá nhân</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Lịch sử mua hàng</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Thông tin cá nhân</h6>
                                <div class="ml-lg-1 mb-4">
                                    <span class="font-size-22">Hello alitfn58</span>
                                    <span class="font-size-2"> (not alitfn58? <a class="link-black-100" href="#">Log out</a>)</span>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-0 font-size-2 ml-lg-1 text-gray-600">From your account dashboard you can view your <span class="text-dark">recent orders,</span> manage your <span class="text-dark">shipping and billing addresses,</span> and edit your <span class="text-dark">password and account details.</span></p>
                                </div>
                                <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
                                    <div class="col">
                                        <div class="border py-6 text-center">
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-order font-size-10 btn-icon__inner"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Orders</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                                <span class="flaticon-cloud-computing font-size-10 btn-icon__inner text-primary"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Downloads</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                                <span class="flaticon-place font-size-10 btn-icon__inner text-primary"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Addresses</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border py-6 text-center">
                                            <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                                <span class="flaticon-user-1 font-size-10 btn-icon__inner text-primary"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Account Details</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn bg-gray-200  rounded-circle px-4 mb-2">
                                                <span class="flaticon-heart font-size-10 btn-icon__inner text-primary"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Wishlist</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                                                <span class="flaticon-exit font-size-10 btn-icon__inner text-primary"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Lịch sử mua hàng</h6>
                                <table class="table">
                                    <thead>
                                    <tr class="border">
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">Order</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Date</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Staus</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Total</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border">
                                        <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                                        <td class="align-middle py-5">March 26, 2020</td>
                                        <td class="align-middle py-5">On hold</td>
                                        <td class="align-middle py-5">
                                            <span class="text-primary">$1,855.00</span> for 5 items</td>
                                        <td class="align-middle py-5">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border">
                                        <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                                        <td class="align-middle py-5">March 26, 2020</td>
                                        <td class="align-middle py-5">On hold</td>
                                        <td class="align-middle py-5">
                                            <span class="text-primary">$1,855.00</span> for 5 items</td>
                                        <td class="align-middle py-5">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border">
                                        <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                                        <td class="align-middle py-5">March 26, 2020</td>
                                        <td class="align-middle py-5">On hold</td>
                                        <td class="align-middle py-5">
                                            <span class="text-primary">$1,855.00</span> for 5 items</td>
                                        <td class="align-middle py-5">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
