<?php

use App\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Manufacturer::create([
            'manufacturer'     =>  'Volvo',
        ]);

        Manufacturer::create([
            'manufacturer'     =>  'VAZ',
        ]);

        Manufacturer::create([
            'manufacturer'     =>  'Mercedes',
        ]);

        Manufacturer::create([
            'manufacturer'     =>  'GAZ',
        ]);
    }
}