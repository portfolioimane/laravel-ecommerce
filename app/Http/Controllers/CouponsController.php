<?php

namespace App\Http\Controllers;
use App\Coupon;
use Cart;

use Illuminate\Http\Request;

class CouponsController extends Controller
{

    public function store(Request $request)
    {
        $coupon=Coupon::where('code', $request->coupon_code)->first();
        if(!$coupon){
            return redirect()->route('checkout.index')->withErrors('Invalid coupon code, Please try again.');
        }
        session()->put('coupon', [
           'name'=>$coupon->code,
           'discount'=>$coupon->discount(Cart::subtotal()), 
        ]);
        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been applied!');
    }


    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been removed.');
    }
}
