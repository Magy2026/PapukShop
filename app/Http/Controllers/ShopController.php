<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
   public function apranqner()
   {
$products = Product::all();
return view ('static.apranqner', compact('products'));
   }
   public function show($id)
   {
$products = Product::findOrFail($id);
return view ('static.show', compact('products'));
   }
   public function filter($filter)
   {
      $query=\App\Models\Product::query();
      switch ($filter){
         case 'girls':
            $query->where('category', 'girls');
            break;
         case 'boys':
            $query->where('category', 'boys');
            break;   
         case 'newborn':
            $query->where('category', 'newborn');
            break;
         case 'new':
            $query->where('is_new', true);
            break;  
         case 'sale':
            $query->where('is_sale', true);
            break; 
         case 'promo':
            $query->where('is_promo', true);
            break;
            default:
            abort(404);
      }
      $products=$query->get();
      return view ('static.apranqner', compact('products'));
   }
}
