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
                                <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab" data-toggle="pill" href="{{route('account')}}" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <a href="{{route('account')}}"><span class="font-weight-normal text-gray-600">Thông tin cá nhân</span></a>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab" data-toggle="pill" href="{{route('web.order_history')}}" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <a href="{{route('web.order_history')}}"><span class="font-weight-normal text-gray-600">Lịch sử mua hàng</span></a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
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
                                    @foreach($order as $order)
                                    <tr class="border">
                                        <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#{{$order->order_no}}</th>
                                        <td class="align-middle py-5">{{$order->ordered_at}}</td>
                                        @if($order->order_status==1)
                                            <td class="align-middle py-5">Đang chờ</td>
                                            <td class="align-middle py-5">Thanh toán khi nhận hàng</td>
                                            <td class="align-middle py-5">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('home')}}"> <button type="submit" class="btn btn-dark rounded-1 btn-wide font-weight-medium">View
                                                        </button></a>
                                                    <a href="{{route('web.remove_order', array('order_id'=>$order->id))}}"> <button type="submit" class="btn btn-dark rounded-1 btn-wide font-weight-medium">Huỷ đơn hàng
                                                        </button></a>
                                                </div>
                                                <div class="d-flex justify-content-center">

                                                </div>
                                            </td>
                                        @else
                                        <td class="align-middle py-5"><span class="text-primary">Đã huỷ</span></td></td>
                                            <td class="align-middle py-5">Thanh toán khi nhận hàng</td>
                                        @endif
                                    </tr>
                                    @endforeach
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
