@extends('web::layouts.master')
@section('content')
    <main id="content" class="mt-13">
        <div class="bg-gray-200 space-bottom-3">
            <div class="container">
                <div class="py-5 py-lg-7">
                    <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Lịch sử order</h6>
                </div>
                <div class="max-width-890 mx-auto">
                    <div class="bg-white pt-6 border">
                        <h6 class="font-size-3 font-weight-medium text-center mb-4 pb-xl-1">Cám ơn bạn đã đặt hàng trên hệ thống chúng tôi.</h6>
                        <div class="border-bottom mb-5 pb-5 overflow-auto overflow-md-visible">
                            <div class="pl-3">

                                @foreach($order as $order)
                                <table class="table table-borderless mb-0 ml-1">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0">Mã đơn hàng: </th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0">Ngày đặt: </th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-right pr-md-9">Payment method:</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{$order->order_no}}</th>
                                        <td class="pr-0 py-0 font-weight-medium">{{$order->ordered_at}}</td>
                                        <td class="pr-md-4 py-0 font-weight-medium text-md-right">Thanh toán khi nhận </td>
                                    </tr>
                                    </tbody>
                                </table>
                                @endforeach

                            </div>
                        </div
                        <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-xl-1">
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col">
                                    <div class="mb-6 mb-md-0">
                                        <h6 class="font-weight-medium font-size-22 mb-3">Billing Address
                                        </h6>
                                        <address class="d-flex flex-column mb-0">
                                            <span class="text-gray-600 font-size-2">Hà Nội</span>
                                            <span class="text-gray-600 font-size-2">Số 1 Đại Cồ Việt, Hai Bà Tr</span>
                                            <span class="text-gray-600 font-size-2">0986868686</span>
                                            <span class="text-gray-600 font-size-2">hust@hust.edu.vn</span>
                                            <span class="text-gray-600 font-size-2">Đại học Bách Khoa Hà Nội</span>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
