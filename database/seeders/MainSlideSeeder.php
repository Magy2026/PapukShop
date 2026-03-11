<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slide;

class MainSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
   
{
       $slides=[
        ['title'=> 'Promo 1',
        'subtitle'=>'Փնտրում եմ իմ ամենալավ Ընկերոջը',
        'image'=>'glxavor.jpg',
       ],

       ['title'=> 'Promo 2',
        'subtitle'=>'Ես տխուր եմ առանց քեզ',
        'image'=>'glxavor1.jpg',
       ],

        ['title'=> 'Promo 3',
        'subtitle'=>'Ես երջանիկ եմ որ գտա քեզ',
        'image'=>'glxavor2.jpg',
       ],

        ['title'=> 'Promo 1',
        'subtitle'=>'Իմ ամենալավ Ընկեր',
        'image'=>'glxavor4.jpg',
       ],
       ];
       foreach($slides as $slide){
        Slide::create($slide);
       }
    }
}
