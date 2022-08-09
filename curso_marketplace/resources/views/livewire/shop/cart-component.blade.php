<div>
    <a href="{{ route('cart') }}"  class="btn btn-primary"> 
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    @auth
    {{ \Cart::session(auth()->id())->getTotalQuantity() }}
    @else
    0
    @endauth

</div>
