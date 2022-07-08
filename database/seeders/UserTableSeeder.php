<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        User::create([
            'username'=>'sana@gmail.com',
             'password'=>bcrypt('1111')
        ]);
        User::create([
            'username'=>'sonu@gmail.com',
             'password'=>bcrypt('1222')
        ]);
        User::create([
            'username'=>'minu@gmail.com',
             'password'=>bcrypt('1333')
        ]);
        User::create([
            'username'=>'linu@gmail.com',
             'password'=>bcrypt('1444')
        ]);
}
}