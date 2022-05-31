<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //product data insert- multi seeders insertion
        DB::table('products')->insert([
            [
                'name'=>'ABANS Refrigerator 250L',
                'price'=>'20000',
                'description'=>"ABANS Refrigerator 250L with dummy discription",
                "category"=>"electronic",
                "gallary"=>"https://buyabans.com/upload/product/Refrigerator/ABRFALG252NFBL/2.jpg",

            ],
            [   'name'=>'oppo tab',
                'price'=>'2078',
                'description'=>"smart tab with dummy discription",
                "category"=>"tab",
                "gallary"=>"https://buyabans.com/upload/product/Tab/GTTAB-A10BK/4.jpg",
            ],
            [
                'name'=>'Sony TV',
                'price'=>'77200',
                'description'=>"Sony tv with dummy discription",
                "category"=>"electronic",
                "gallary"=>"https://www.singersl.com/sites/default/files/styles/product_large/public/images/products/2021-07/SNY_KD-65X80J-02.jpg",

            ],
            ['name'=>'toshiba TV',
            'price'=>'4500',
            'description'=>"toshiba TV with dummy discription",
            "category"=>"elctronic",
            "gallary"=>"https://www.singersl.com/sites/default/files/styles/product_large/public/images/products/2021-06/TCL_TCL55P615-01.jpg",
            ],
            [
                'name'=>'Dell Laptop',
                'price'=>'120200',
                'description'=>"dell laptop with dummy discription",
                "category"=>"Laptop",
                "gallary"=>"https://www.singersl.com/sites/default/files/styles/product_large/public/images/products/2021-12/DELL5510-I5-8GB512-BLU-01.jpg",

            ],
            ['name'=>'TCL Mobile',
            'price'=>'65200',
            'description'=>"smart fon with dummy discription",
            "category"=>"mobile",
            "gallary"=>"https://www.singersl.com/sites/default/files/styles/product_large/public/images/products/2021-10/TCL_TCL20Y-4-128-JWBLK-01.jpg",
            ],


        ]);
    }
}
