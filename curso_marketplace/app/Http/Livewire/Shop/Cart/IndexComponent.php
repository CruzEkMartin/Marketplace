<?php

namespace App\Http\Livewire\Shop\Cart;

use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        $cart_items = \Cart::session(auth()->id())->getContent();
        return view('livewire.shop.cart.index-component', compact('cart_items'))
            ->extends('layouts.app')
            ->section('content');
    }

    public function update_quantity($itemid, $quantity)
    {

        // update the item on cart
        \Cart::session(auth()->id())->update($itemid, [
            'quantity' => array(
                'relative'=>false,
                'value' => $quantity
            ),
        ]);
    }

    public function delete_item()
    {
    }
}
