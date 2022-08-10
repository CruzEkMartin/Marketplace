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
                @foreach ($cart_items->sortBy('id') as $key => $cart_item)
                    <tr>
                        <td>{{ $cart_item->name }}</td>
                        <td>
                            <input type="number" id="Cantidad{{ $cart_item->id }}"
                                wire:change="update_quantity({{ $cart_item->id }} , $('#Cantidad' + {{ $cart_item->id }}).val())"
                                class="form-control" value="{{ $cart_item->quantity }}">
                        </td>
                        <td>{{ \Cart::session(auth()->id())->get($cart_item->id)->getPriceSum() }}</td>
                        <td><button type="button" wire:click="delete_item({{ $cart_item->id }})"
                                class="btn btn-danger">Eliminar</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total: $ {{ \Cart::session(auth()->id())->getTotal() }}</h3>

        <a href="{{ route('checkout') }}" class="btn btn-primary">Pagar</a>

    </div>

</div>
