@extends('web::layouts.master')
@section('content')
    <div id="content" class="site-content bg-punch-light space-bottom-3 mt-13">
        <div class="col-full container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
                        <header class="entry-header space-top-2 space-bottom-1 mb-2">
                            <h4 class="entry-title font-size-7 text-center">Thanh toán</h4>
                        </header>
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message', null);
                        }
                        ?>
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form name="checkout" action="{{route('web.save_checkout_customer')}}" method="get" class="checkout woocommerce-checkout row mt-8"  enctype="multipart/form-data" novalidate="novalidate">
                                    {{csrf_field()}}
                                    <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                        <div class="px-4 pt-5 bg-white border">
                                            <div class="woocommerce-billing-fields">
                                                <h3 class="mb-4 font-size-3">Thông tin nhận hàng</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper row">
                                                    <p class="col-12 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label　@error('receiver_name') is-invalid @enderror">Họ tên người nhận *</label>
                                                        <input type="text" class="input-text form-control"  name="receiver_name" placeholder="" value="">
                                                        @error('receiver_name')
                                                        <span class="error invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label　@error('email') is-invalid @enderror">Email</label>
                                                        <input type="email" class="input-text form-control" name="email">
                                                        @error('email')
                                                        <span class="error invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label @error('receiver_phone_number') is-invalid @enderror">Phone number *</label>
                                                        <input type="text" class="input-text form-control" name="receiver_phone_number">
                                                        @error('receiver_phone_number')
                                                        <span class="error invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                        <label for="billing_country" class="form-label @error('province') is-invalid @enderror">Tỉnh/Thành phố <abbr class="required" title="required">*</abbr></label>
                                                        <select name="province" id="billing_country" class="form-control country_to_state country_select  select2-hidden-accessible" tabindex="-1">
                                                            <option value="">Chọn tỉnh/thành phố</option>
                                                            @foreach(ADDRESS as $add)
                                                                <option value="{{$add}}">{{$add}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('province')
                                                        <span class="error invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="col-12 mb-3 form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                        <label for="billing_address_1" class="form-label @error('add') is-invalid @enderror">Địa chỉ *</label>
                                                        <input type="text" class="input-text form-control" name="billing_address_1" placeholder="Địa chỉ cụ thể khi nhận hàng" value="">
                                                        @error('add')
                                                        <span class="error invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="col-12 mb-3 form-row form-row-wide address-field validate-required">
                                                        <label for="order_comments" class="form-label">Ghi chú (không bắt buộc)</label>
                                                        <textarea name="order_comments" class="input-text form-control" id="order_comments" placeholder="Thêm ghi chú cho đơn hàng của bạn" rows="8" cols="5"></textarea>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 pt-5 bg-white border border-top-0 mt-n-one">
                                            <div class="woocommerce-additional-fields">
                                                <h3 class="mb-4 font-size-3">Thông tin thanh toán</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper row">
                                                    <div class="col-12 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                        <label for="billing_country" class="form-label">Loại thanh toán</label>
                                                        <select name="payment_id" class="form-control" disabled>
                                                            <option value="1" selected>Thanh toan khi nhan hang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 id="order_review_heading" class="d-none">Danh sách sản phẩm</h3>
                                    <div id="order_review" class="col-md-6 col-lg-5 col-xl-4 woocommerce-checkout-review-order">
                                        <div id="checkoutAccordion" class="border border-gray-900 bg-white mb-5">
                                            <div class="p-4d875 border">
                                                <div class="checkout-head">
                                                    <a href="#" class="text-dark d-flex align-items-center justify-content-between collapsed" aria-expanded="true">
                                                        <h3 class="checkout-title mb-0 font-weight-medium font-size-3">Danh sách sản phẩm</h3>
                                                    </a>
                                                </div>
                                                <div id="checkoutCollapseOnee" class="mt-4 checkout-content collapse-show" aria-labelledby="checkoutHeadingOnee" data-parent="#checkoutAccordion" style="">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead class="d-none">
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Tổng</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $total = 0;
                                                        ?>
                                                        @foreach($product_cart as $key => $product_cart)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                {{$product_cart->title}}&nbsp; <strong class="product-quantity">× {{$product_cart->quantity}}</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">{{\App\Helpers\format_currency($product_cart->price*$product_cart->quantity)}}</span>
                                                            </td>
                                                            <?php
                                                                $total += $product_cart->price*$product_cart->quantity;
                                                            ?>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="p-4d875 border">
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                    <tr class="order-total">
                                                        <th>Tổng</th>
                                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount">{{ \App\Helpers\format_currency($total)}}</span></strong> </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-row place-order">
                                            <button class="button alt btn btn-dark btn-block rounded-0 py-4" type="submit">Đặt hàng</button>
                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="926470d564"><input type="hidden" name="_wp_http_referer" value="/storefront/?wc-ajax=update_order_review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>

                </main>

            </div>

        </div>

    </div>
@endsection
