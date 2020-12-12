@extends("web::layouts.master")

@section("content")
    <div class="site-content bg-punch-light overflow-hidden mt-12" id="content">
        <div class="container">
            <header class="entry-header space-top-2 space-bottom-1 mb-2">
                <h1 class="entry-title font-size-7">Giỏ hàng của bạn: {{$quantityInCart ?? 0}} sản phẩm</h1>
            </header>
            <div class="row pb-8">
                <div id="primary" class="content-area mr-4">
                    <main id="main" class="site-main ">
                        <div class="page type-page status-publish hentry">

                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form table-responsive" action="#" method="post">
                                        @csrf
                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-price">Giá bán</th>
                                                <th class="product-quantity">Số lượng</th>
                                                <th class="product-subtotal">Tổng</th>
                                                <th class="product-remove">&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($itemsInCart as $item)
                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-name" data-title="Product">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="{{$item->product->image}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" width="45" alt="">
                                                        </a>
                                                        <div class="ml-3 m-w-200-lg-down">
                                                            <a href="{{route('product.detail', $item->product_id)}}">{{$item->product->title}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount">{{\App\Helpers\format_currency($item->product->price)}}</span>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity d-flex align-items-center">

                                                        <div class="border px-3 width-120">
                                                            <div class="js-quantity">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="js-minus text-dark" onclick="decrementQuantity(this, {{$item->product_id}}, {{$item->product->price}})"><i class="fas fa-minus"></i></span>
                                                                    <input type="text" class="input-text qty text js-result form-control text-center border-0" pattern="[\d]" id="quantity" name="quantity" value="{{$item->quantity}}" title="Qty" />
                                                                    <span class="js-plus text-dark" onclick="incrementQuantity(this, {{$item->product_id}},  {{$item->product->price}})"><i class="fas fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount" id="total-price-{{$item->product_id}}">{{\App\Helpers\calculate_total_price($item->quantity, $item->product->price)}}</span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#" class="remove" aria-label="Remove this item">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5" class="actions">

                                                    <input type="button" class="button" name="update_cart" value="Cập nhật giỏ hàng">
                                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="db025d7a70"><input type="hidden" name="_wp_http_referer" value="/storefront/cart/">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div id="secondary" class="sidebar cart-collaterals order-1" role="complementary">
                    <div id="cartAccordion" class="border border-gray-900 bg-white mb-5">
                        <div class="p-4d875 border">
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                <tr class="order-total">
                                    <th>Tổng số tiền</th>
                                    <td class="ml-4">
                                        <strong>
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>97.99</span>
                                        </strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="wc-proceed-to-checkout">
                        <a href="{{route("web.checkout")}}" class="checkout-button button alt wc-forward btn btn-dark btn-block rounded-0 py-4">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function incrementQuantity(e, product_id, price) {
            let inputEl = $(e).parent().children()[1];
            let quantity = parseInt($(inputEl).val()) + 1;
            $(inputEl).val(quantity);
            $('#total-price-' + product_id).html(formatPrice(quantity * price));
        }

        function decrementQuantity(e, product_id, price) {
            let inputEl = $(e).parent().children()[1];
            let quantity = parseInt($(inputEl).val()) - 1;
            if(quantity > 0) {
                $(inputEl).val(quantity);
                $('#total-price-' + product_id).html(formatPrice(quantity * price));
            }
        }

        function formatPrice(price) {
            let nf = new Intl.NumberFormat();
            return nf.format(price) + "đ";
        }

        $(document).ready(function() {

        });
    </script>
@endsection
