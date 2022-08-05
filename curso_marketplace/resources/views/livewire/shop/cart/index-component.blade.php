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
                @foreach ($cart_items as $cart_item)
                    <tr>
                        <td>{{ $cart_item->name }}</td>
                        <td>{{ $cart_item->quantity }}</td>
                        <td>{{ \Cart::session(auth()->id())->get($cart_item->id)->getPriceSum() }}</td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<h3>Total: $ {{ \Cart::session(auth()->id())->getTotal() }}</h3>
    </div>

</div>
