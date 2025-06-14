<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name' => 'Rudi',
            'level' => 'User Biasa',
            'email' => 'rudi@gmail.com',
            'password' => bcrypt('rudi101'),
            'remember_token' => Str::random(60),
        ]);
    }
}
