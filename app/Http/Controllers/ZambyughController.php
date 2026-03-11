<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZambyughController extends Controller
{
       public function addToCart($id)
    {
        $product=Product::findOrFail($id);
       $cart=session()->get('cart',[]);
       if(isset($cart[$id])){
        $cart[$id]['qty']++;
       }else{
        $cart[$id]=[
            'name'=>$product->name,
            'price'=>$product->price,
            'image'=>$product->image,
            'qty'=>1
        ];
    }
    session()->put('cart', $cart);
  
    return redirect()->route('zambyugh');

}

     public function zambyugh()
{
    $cart=Session()->get('cart', []);
    return view('static.zambyugh',compact('cart'));
}


    public function increment($id)
    {
      $cart=session()->get('cart',[]);
       if(isset($cart[$id])){
        $cart[$id]['qty']++;
        session()->put('cart',$cart);
        }
        return redirect()->route('zambyugh');
       }


    
     public function decrement($id)
    {
      $cart=session()->get('cart',[]);
       if(isset($cart[$id])&& $cart[$id]['qty']>1){
        $cart[$id]['qty']--;
       }else{
        unset($cart[$id]);
       }
        session()->put('cart',$cart);
        return redirect()->route('zambyugh');
       } 


        public function remove($id)
    {
      $cart=session()->get('cart',[]);
      if(isset($cart[$id])){
            unset($cart[$id]);
       }
        session()->put('cart', $cart);
        return redirect()->route('zambyugh');
       } 
       }