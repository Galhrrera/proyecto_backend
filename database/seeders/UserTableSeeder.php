<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Usuario::create([
            'name' => 'Juan Galeano',
            'email' => 'jegaleanoherrera@gmailcom',
            'password' => Hash::make('123'),
            'remember_token' => str_random(10),
        ]);
        

        /*
        $users = Usuario::create([
            'name' => 'Juan Galeano',
            'email' => 'jegaleanoherrera@gmailcom',
            'password' => Hash::make('123'),
            'remember_token' => str_random(10),
        ]);
        */
    }
}
