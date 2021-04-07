<?php

use Illuminate\Database\Seeder;
use App\Laptop;
class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $laptops=[['model'=>'acer','description'=>'bello','price'=>'1200'],
      ['model'=>'mac','description'=>'medio','price'=>'900'],['model'=>'asus','description'=>'brutto','price'=>'1500']
    ];
       foreach ($laptops as $laptop) {
        $newlaptop= new Laptop();
        $newlaptop->fill($laptop);
        $newlaptop->save();
       }

    }
}
