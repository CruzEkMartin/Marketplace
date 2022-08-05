<div>
    <a href="{{ route('cart') }}"  class="btn btn-primary"> 
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    {{ \Cart::session(auth()->id())->getTotalQuantity() }}
</div>
