<div>
    <i class="fas fa-shopping-cart"></i>
    {{-- getTotalQuantity  Trae todos los productos aunque se repitan--}}
    {{\Cart::session(auth()->id())->getContent()->count() }}
</div>
