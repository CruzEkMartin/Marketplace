<div>
    <a href="{{ route('cart') }}"  class="btn btn-primary"> 
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    @auth
    {{-- getTotalQuantity() --}}    
    {{ \Cart::session(auth()->id())->getContent()->count() }}
    @else
    0
    @endauth

</div>
