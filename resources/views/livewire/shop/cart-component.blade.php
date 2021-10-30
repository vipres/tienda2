<div>
    <a href="{{ route('cart') }}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>

    {{-- getTotalQuantity  Trae todos los productos aunque se repitan--}}

    @auth
    {{\Cart::session(auth()->id())->getContent()->count() }}

    @else
    0
    @endauth

</div>
