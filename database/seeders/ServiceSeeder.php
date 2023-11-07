<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('services')->insert([
            [
                'name' => 'Вет. Допомога',
            ],
            [
                'name' => 'Лікування',
            ],
            [
                'name' => 'Грумінг',
            ],
            [
                'name' => 'Діагностика та огляд',
            ],
            [
                'name' => 'Профілактичні вакцинації',
            ],
            [
                'name' => 'Лабораторні аналізи',
            ],
        ]);

    }
}
