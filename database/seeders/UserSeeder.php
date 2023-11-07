<?php

namespace Database\Seeders;

use App\Enums\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'phone' => '+380960000000',
            'password' => Hash::make(1111),
            'role' => UserType::Administrator,
            'date_of_birth' => '1991-01-01'
        ]);

    }
}
