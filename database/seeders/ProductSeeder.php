<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'=>'APPLE MACBOOK AIR',
                'details' => 'APPLE MGN63ZP/A MACBOOK AIR (SPACE GREY) 13.3-INCH 8-CORE APPLE M1 8GB RAM 256GB SSD',
                'description' =>'Screen Size: 13.3-inch<br>
                Processor Model: Apple M1 chip with 8-core CPU and 7-core GPU<br>
                Main Memory: 8GB<br>
                Internal Storage: 256GB<br>
                Operating System: MacOS',
                'brand'=>'Apple',
                'price' => 1599,
                'shipping_cost' =>10,
                'image_path' => 'storage/apple-laptop.jpeg'
            ],
            [
                'name'=>'LENOVO YOGA S7 PRO',
                'details' => 'LENOVO YOGA S7 PRO 14ACH5 82MS008SSB 14INCH 2.2K IPS AMD R7 5800H 16GB 512GB WIN 11 RADEON LIGHT SILVER',
                'description' =>'Screen Size: 14" 2.2K IPS<br>
                Processor Model: R7-5800H<br>
                Main Memory: 16GB DDR4<br>
                Internal Storage: 512GB SSD<br>
                Operating System: win 11',
                'brand'=>'Lenovo',
                'price' => 1290,
                'shipping_cost' =>0,
                'image_path' => 'storage/lenovo-laptop.jpeg'
            ],
            [
                'name'=>'MICROSOFT SURFACE LAPTOP',
                'details' => 'MICROSOFT SURFACE LAPTOP 4 5BT-00018 13IN INTEL CORE I5-1135G7 8GB 512 GB SSD WIN 10',
                'description' =>'Screen Size: Screen: 13.5” PixelSense™ Display<br>
                Processor Model: Quad Core 11th Gen Intel® Core™ i5-1135G7 processor<br>
                Main Memory: 8GB LPDDR4x RAM<br>
                Internal Storage: SSD: 512GB',
                'brand'=>'Microsoft',
                'price' => 1599,
                'shipping_cost' =>0,
                'image_path' => 'storage/microsoft-laptop.jpg'
            ],

        ];

        foreach($products as $key=>$prod)
        {
            Product::create($prod);
        }
    }
}
