<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::truncate();
        User::insert([
            [
                'name' => 'doctor',
                'email' => 'doctor@demo.com',
                'password' => \Hash::make('password123'),
                'created_at' => Carbon\Carbon::now(),
                'type' => '1',
            ],
            [
                'name' => 'patient',
                'email' => 'patient@demo.com',
                'password' => \Hash::make('password123'),
                'created_at' => Carbon\Carbon::now(),
                'type' => '0',
            ]
        ]);
    }
}
