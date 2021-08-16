<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class Login extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Yohan Chathuranga',
            'email' => 'admin1234@gmail.com',
            'address' => 'Patuwatha, Dodandhuwa',
            'gender' => 'Male',
            'dob' => '1996-06-05',
            'phone_number' => '0712126518',
            'password' => Hash::make('abcd1234'),
        ]);

        $user->attachRole('admin');
    }
}
