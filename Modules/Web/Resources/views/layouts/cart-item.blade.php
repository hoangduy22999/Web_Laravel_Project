@if(!empty($quantityInCart) && $quantityInCart > 0)
    <span class="position-absolute width-16 height-16 rounded-circle d-flex align-items-center justify-content-center bg-dark-1 text-white font-size-n9 left-0 top-0 ml-n2 mt-n1">
        {{$quantityInCart}}
    </span>
@endif
