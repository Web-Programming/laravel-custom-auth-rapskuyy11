<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'username'=>'admin',
                'name'=>'AkunAdmin',
                'email'=>'admin@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],

            [
                'username'=>'user1',
                'name'=>'AkunUser1',
                'email'=>'user1@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],

            [
                'username'=>'user2',
                'name'=>'AkunUser2',
                'email'=>'user2@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}





                
        
