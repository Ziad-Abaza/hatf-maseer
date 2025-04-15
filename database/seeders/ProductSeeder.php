<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $advantages = [
            [
                'ar' => ' ',
            ],
            [
                'ar' => ' ',
            ],
            [
                'ar' => ' ',
                'en' => ' ',
            ],
        ];


        foreach ($advantages as $advantage) {
            Product::create([
                'content' => prepareLocalizedData($advantage['ar'], $advantage['en']),
            ]);
        }
    }
}

// php artisan db:seed --class=AdvantageSeeder
