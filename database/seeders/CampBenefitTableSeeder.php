<?php

namespace Database\Seeders;
use App\Models\CampBenefit;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'From Zero to Hero'
            ],
            [
                'camp_id' => 1,
                'name' => 'Airpods Pro 2nd Gen'
            ],
            [
                'camp_id' => 1,
                'name' => 'One on One Mentoring'
            ],
            [
                'camp_id' => 1,
                'name' => 'Certificates'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'One on One Mentoring'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],

        ];
        foreach ($campBenefits as $key => $campBenefit) {
            CampBenefit::create($campBenefit);
        }
    }
}
