<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('users')->insert([

            'name' => 'juan ramos',
            'email' => 'juan2ramos@gmail.com',
            'password' => \Hash::make('123456'),
            'address' => '',
            'location' => '',
            'document' => '80921505',
            'document_type' => 'cédula',
            'mobile' => '',
            'phone' => '',
            'role_id' => 1
        ]);
    }

}