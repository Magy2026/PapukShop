<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
      Product::truncate();
       Product::create([
        'name'=> 'Արջուկ',
        'price'=> 15000,
        'image'=> 'products/arj1.webp',
        'images'=>[
          'products/arj1.webp',
          'products/arj2.webp',
          'products/arj3.webp',
          'products/arj4.webp'],
        'description'=>'Փափուկ խաղալիք՝ սպիտակ բևեռային արջ',
        ]);

        Product::create([
        'name'=> 'Փղիկ',
        'price'=> 8000,
        'image'=> 'products/pxik1.jpg',
          'images'=>[
          'products/pxik1.jpg',
          'products/pxik2.jpg',
          'products/pxik3.jpg'],
        'description'=>'Փափուկ խաղալիք՝ դարչնագույն փղիկ',
       ]);

         Product::create([
        'name'=> 'Փափուկ',
        'price'=> 7000,
        'image'=> 'products/papuk1.webp',
        'images'=>[
          'products/papuk1.webp',
          'products/papuk2.webp',
          'products/papuk3.webp',
          'products/papuk4.webp',
          'products/papuk5.webp'],
         'description'=>'Փափուկ խաղալիք՝ փափուկ, ներգնազգեստով',
       ]);


         Product::create([
        'name'=> 'Դինոզավրիկ',
        'price'=> 5000,
        'image'=> 'products/dino.jpg',
        'images'=>[
        'products/dino.jpg'],
       ]);



        Product::create([
        'name'=> 'Արջուկ',
        'price'=> 7500,
        'image'=> 'products/arjuk.jpg',
         'images'=>[
          'products/arjuk.jpg'],
       ]);


        Product::create([
        'name'=> 'Փիղիկ',
        'price'=> 6500,
        'image'=> 'products/pixik.webp',
          'images'=>[
          'products/pixik.webp',
          'products/pixik1.webp',
          'products/pixik2.webp'],
          'category'=>'newborn',
         'is_new'=> true,
        'is_sale'=>false,
        'is_promo'=>true,
        'description'=>'Փղիկ նորածնային',
       ]);

        Product::create([
        'name'=> 'Կախվող խաղալիքներ',
        'price'=> 8500,
        'image'=> 'products/kaxovi.webp',
          'images'=>[
          'products/kaxovi.webp',
          'products/kaxovi1.webp'
        ],
        'category'=>'newborn',
        'is_new'=> true,
        'is_sale'=>false,
        'is_promo'=>true,
        'description'=>'Նորածնային',
       ]);

        Product::create([
        'name'=> 'Մեքենա և աղվես',
        'price'=> 18000,
        'image'=> 'products/meqena.webp',
          'images'=>[
          'products/meqena.webp',
          'products/meqena1.webp',
          'products/meqena2.webp',
          'products/meqena3.webp'
        ],
        'category'=>'boys',
        'is_new'=> true,
        'is_sale'=>false,
        'is_promo'=>true,
        'description'=>'Մեքենա փայտե  ակերով և աղվես',
       ]);
        
       Product::create([
        'name'=> 'Տիկնիկ շիկահեր',
        'price'=> 10000,
        'image'=> 'products/tiknik1.webp',
          'images'=>[
          'products/tiknik1.webp',
          'products/tiknik2.webp',
          'products/tiknik3.webp'
        ],
        'category'=>'girls',
        'is_new'=> true,
        'is_sale'=>false,
        'is_promo'=>true,
        'description'=>'Շիկահեր տիկնիկ',
       ]);

        Product::create([
        'name'=> 'Տիկնիկ կարմրահեր',
        'price'=> 10000,
        'image'=> 'products/tiknikik1.webp',
          'images'=>[
          'products/tiknikik1.webp',
          'products/tiknikik2.webp',
          'products/tiknikik3.webp'
        ],
         'category'=>'girls',
        'is_new'=> true,
        'is_sale'=>false,
        'is_promo'=>true,
        'description'=>'Կարմրահեր տիկնիկ',
       ]);
 }
}
