<?php
namespace Database\Seeders;

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
        DB::table('products')->insert([
       
            [
                'name'=>'Samsung A50',
                "price"=>"20000",
                "category"=>"mobile",
                "Description"=>"Samsung phone with 128gb storage and 6gb ram ",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/51ZEJCEojOL._SL1500_.jpg"
            ],
             [
                'name'=>'Samsung 4k LED',
                "price"=>"60000",
                "category"=>"tv",
                "Description"=>"4k android 50 inches led tv",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/81dzcHvdywL._SL1500_.jpg"
            ],
             [
                'name'=>'mi led tv',
                "price"=>"30000",
                "category"=>"tv",
                "Description"=>"mi 32 inches smart tv",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/51ZEJCEojOL._SL1500_.jpg"
            ],
             [
                'name'=>'IFB Washing Machine',
                "price"=>"18000",
                "category"=>"washing machine",
                "Description"=>"IFB front-load 8.5kg washing machine",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/61BMBenp6NS._SL1500_.jpg"
            ],
            ]);
 
       
    }
}