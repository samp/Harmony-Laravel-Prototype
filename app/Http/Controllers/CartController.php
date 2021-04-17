<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Track;
use App\Models\Item;
use View;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = [];
        $total = 0.0;

        if($request->session()->get('cart') != null)
        {
            $cart = $request->session()->get('cart');

            foreach($cart as $cartitem)
            {
                $total += $cartitem["price"];
            }
        }

        return View::make('cart.index')->with('cart', $cart)->with('total', $total);
    }

    public function clearCart(Request $request)
    {
        $request->session()->forget('cart');
        return back();
    }

    public function removeItem($cartitem, Request $request)
    {
        $cart = $request->session()->get('cart');
        unset($cart[$cartitem]);
        $request->session()->put('cart', $cart);

        return back();
    }

    public function addTrackToCart(Track $track, Request $request)
    {
        $item = array('name' => $track->disc->album->albumlisting->artist . ' - ' . $track->name, 'price' => $track->price);
        $request->session()->push('cart', $item);
    
        Session::flash('cartsuccess', 'Added "' . $track->disc->album->albumlisting->artist . ' - ' . $track->name . '" to your cart');
        return back();
    }

    // public function addMerchToCart(Item $item, Request $request)
    // {
    //     // dd($item, $item->itemlisting->name);
    //     Session::flash('cartsuccess', 'Added "' . $item->itemlisting->name . ' (' . $item ->size . ')" to you cart');
    //     return back();
    // }

    // public function addEventToCart(Request $request)
    // {
    //     Session::flash('success', 'Added to Cart');
    //     return back();
    // }
}