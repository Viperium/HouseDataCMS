<?php

use App\Listing;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::create([
            'name' => 'Sub-Urban Palace',
            'type' => 'vrijstaand',
            'rooms' => 6,
            'price' => 650000.00,
            'status' => 'in verkoop',
            'image' => '../storage/app/images/listings/house1.jpg'
        ]);

        Listing::create([
            'name' => 'Modern House',
            'type' => 'rijtjeshuis',
            'rooms' => 4,
            'price' => 225000.00,
            'status' => 'in optie/verkocht onder voorbehoud',
            'image' => '../storage/app/images/listings/house2.jpg'
        ]);

        Listing::create([
            'name' => 'Modern Architectural House',
            'type' => 'vrijstaand',
            'rooms' => 6,
            'price' => 1225000,
            'status' => 'verkocht',
            'image' => '../storage/app/images/listings/house3.jpg'
        ]);
    }
}
