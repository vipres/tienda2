<div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items->sortBy('id') as $key => $item )
                <tr>
                    <td scope="row">{{ $item->name }}</td>
                    <td>

                      <input type="number"
                        id="v{{ $item->id }}"
                        wire:change ="update_quantity({{ $item->id }}, $('#v' + {{ $item->id }}).val())"
                      value="{{ $item->quantity }}" class="form-control">
                    </td>

                    <td>
                        {{\Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                    </td>
                    <td>
                        <button type="button" wire:click ="delete_item({{ $item->id }})"  class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <h3>Total: {{\Cart::session(auth()->id())->getTotal() }} €</h3>

        <a href="{{ route('checkout') }}" class="btn btn-primary">Pagar</a>

    </div>
</div>
