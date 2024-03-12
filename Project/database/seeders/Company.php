<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Company extends Seeder
{
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'cm_name' => 'ABC Corporation',
                'cm_phone' => '123-456-7890',
                'cm_full_name' => 'ABC Corporation Co., Ltd.',
                'cm_about_cm' => 'ABC Corporation is a leading technology company specializing in software development.',
                'cm_income' => '5000',
                'cm_img' => 'image/01.webp',
            ],
            [
                'cm_name' => 'XYZ Ltd',
                'cm_phone' => '987-654-3210',
                'cm_full_name' => 'XYZ Limited',
                'cm_about_cm' => 'XYZ Ltd. is a global provider of innovative solutions in the healthcare industry.',
                'cm_income' => '4000',
                'cm_img' => 'image/02.jpg',
            ],
            [
                'cm_name' => 'Enterprises',
                'cm_phone' => '555-123-4567',
                'cm_full_name' => 'Enterprises Group',
                'cm_about_cm' => 'Enterprises is a diversified business group with interests in finance, real estate, and technology.',
                'cm_income' => '3000',
                'cm_img' => 'image/03.jpg',
            ],
        ]);
    }
}
