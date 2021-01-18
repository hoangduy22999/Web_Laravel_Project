@extends('web::layouts.master')
@section('content')
    <main id="content" class="mt-13">
        <div class="bg-gray-200 space-bottom-3">
            <div class="container">
                <div class="py-5 py-lg-7">
                    <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Lịch sử mua hàng</h6>
                </div>
                <div class="max-width-890 mx-auto">
                    <div class="bg-white pt-6 border">
                        <div class="border-bottom mb-5 pb-6">
                            <div class="px-3 px-md-4">
                                <div class="ml-md-2">
                                    @foreach($orders as $order)
                                    <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Chi tiết đơn hàng: {{$order->order_no}}</h6>
                                    @endforeach
                                    <?php $total_price = 0;
                                    ?>
                                    @foreach($order_lines as $order_line)
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-baseline">
                                                <div>
                                                    <h6 class="font-size-2 font-weight-normal mb-1">{{$order_line->title}} <br> </h6>
                                                    <span class="font-size-2 text-gray-600"></span>
                                                </div>
                                                <span class="font-size-2 ml-4 ml-md-8">x{{$order_line->quantity}}</span>
                                            </div>
                                            <span class="font-weight-medium font-size-2">{{\App\Helpers\format_currency($order_line->order_price)}}</span>
                                        </div>
                                        <?php
                                        $total_price += $order_line->order_price;
                                        ?>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-5 pb-5">
                            <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                                <li class="d-flex justify-content-between py-2">
                                    <span class="font-weight-medium font-size-2">Total:</span>
                                    <span class="font-weight-medium font-size-2">{{\App\Helpers\format_currency($total_price)}}</span>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <span class="font-weight-medium font-size-2">Shipping:</span>
                                    <span class="font-weight-medium font-size-2">Miễn phí</span>
                                </li>
                                <li class="d-flex justify-content-between pt-2">
                                    <span class="font-weight-medium font-size-2">Payment Method:</span>
                                    <span class="font-weight-medium font-size-2">Thanh toán khi nhận hàng</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-center align-content-center">
                                <a href="javascript:;" onclick="window.history.back();">
                                    <button type="button" class="btn btn-dark rounded-1 btn-wide font-weight-medium mr-1 mb-2">Quay lại
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
