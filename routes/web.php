<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ZambyughController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/about', [BasicController::class, 'about'])->name('about');

Route::get('/kap',[BasicController::class, 'kap'])->name('kap');

Route::get('/apranqner', [ShopController::class, 'apranqner'])->name('apranqner');
Route::get('/apranqner/{id}', [ShopController::class, 'show'])->name('apranqner.show');

Route::get('/zambyugh', [ZambyughController::class, 'zambyugh'])->name('zambyugh');
Route::get('/add-to-cart/{id}', [ZambyughController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart/increment/{id}', [ZambyughController::class, 'increment'])->name('cart.increment');
Route::get('/cart/decrement/{id}', [ZambyughController::class, 'decrement'])->name('cart.decrement');
Route::get('/cart/remove/{id}', [ZambyughController::class, 'remove'])->name('cart.remove');

Route::post('/kap',[BasicController::class, 'submit'])->name ('kap.post');

Route::get('/posts',[PostController::class, 'index'])->name ('posts');

Route::get('/' ,[HomeController::class, 'index'])->name ('home');

Route::get('/products/{filter}',[ShopController::class, 'filter'])->name ('products.filter');
// Route::get('test-sum', function (){
//  function zuygeriGumar($array) {
// $gumar=0;
// foreach ($array as $number){
//     if ($number%2==0){
//        $gumar+=$number;
//     }
// }
// return $gumar;
//  }
// $sampleArray=[1,2,3,4,5,6,7,8,9,10];
// echo zuygeriGumar($sampleArray);
// });



