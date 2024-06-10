<?php

namespace Database\Seeders;

use App\Models\InformationPoint;
use App\Models\InformationService;
use App\Models\ServicePointInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        seed information_point table
        $points = InformationPoint::factory(20)->create();
//        seed information_service table
        $services = InformationService::factory(10)->create();
//        seed random ids to information_service-information
        $points->each(function ($point) use ($services) {
            $services->each(function ($service) use ($point) {
                $i = rand(0,1);
                if ($i == 1) {
                    ServicePointInformation::create(['service_id' => $service->id, 'information_id' => $point->id]);
                }
            });

        });
    }
}
