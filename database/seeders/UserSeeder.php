<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Seeders;
use App\models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Marketing',
            'level' => 'Admin',
            'email' => 'adminmarketing@aeon-rt.com',
            'password' => bcrypt('iniadminmarketing'),
            'remember_token' => Str::random(60),
        ]);
    }
}
