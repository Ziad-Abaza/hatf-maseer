<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $services = [
            [
                'ar' => '<div class="overlay-s translatable" data-ar="صيانة غرف ومستودعات التبريد والتجميد"> أنظمة شفط الفنادق والتبريد المركزية</div>',
                'en' => '<div class="overlay-s translatable"data-en="Maintenance of cooling and freezing rooms and warehouses">Maintenance of cooling and freezing rooms and warehouses</div>',

            ],
            [
                'ar' => '<div class="overlay-s translatable" data-ar="صيانة صناديق السيارات المبردة">
                                صيانة صناديق السيارات المبردة
                            </div>',
                'en' => '<div class="overlay-s translatable" data-en="Maintenance of refrigerated vehicle boxes">
                                Maintenance of refrigerated vehicle boxes
                            </div>',

            ],
            [
                'ar' => '                          <div class="overlay-s translatable" data-ar="صيانة وحدات تبريد السيارات المبردة">
                                صيانة وحدات تبريد السيارات المبردة
                            </div>',
                'en' => '                            <div class="overlay-s translatable" data-en="Maintenance of refrigerated vehicle cooling units">
                                Maintenance of refrigerated vehicle cooling units
                            </div>',

            ],
            [
                'ar' => '                            <div class="overlay-s translatable" data-ar="أنظمة شفط الفنادق والتبريد المركزية">
                                أنظمة شفط الفنادق والتبريد المركزية
                            </div>',
                'en' => '                            <div class="overlay-s translatable" data-en="Hotel exhaust and central cooling systems">
                                Hotel exhaust and central cooling systems
                            </div>',

            ],
            [
                'ar' => '                            <div class="overlay-s translatable" data-ar="صيانة صناديق السيارات المبردة">
                                صيانة صناديق السيارات المبردة
                            </div>',
                'en' => '                            <div class="overlay-s translatable" data-en="Maintenance of refrigerated vehicle boxes">
                                Maintenance of refrigerated vehicle boxes
                            </div>',

            ],
            [
                'ar' => '                            <div class="overlay-s translatable" data-ar="صيانة وحدات تبريد السيارات المبردة">
                                صيانة وحدات تبريد السيارات المبردة
                            </div>',
                'en' => '                            <div class="overlay-s translatable" data-en="Maintenance of refrigerated vehicle cooling units">
                                Maintenance of refrigerated vehicle cooling units
                            </div>',

            ],
            [
                'ar' => '                            <div class="overlay-s translatable" data-ar="أنظمة شفط الفنادق والتبريد المركزية">
                                أنظمة شفط الفنادق والتبريد المركزية
                            </div>',
                'en' => '                            <div class="overlay-s translatable" data-en="Hotel exhaust and central cooling systems">
                                Hotel exhaust and central cooling systems
                            </div>',

            ],

        ];
        foreach ($services as $service) {
            Service::create([
                'content' => prepareLocalizedData($service['ar'], $service['en']),
            ]);
        }
    }
}

// php artisan db:seed --class=ServiceSeeder
