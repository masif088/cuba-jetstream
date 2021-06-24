<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'kampus',
            'email'=>'p@P',
            'password'=>bcrypt('a'),
            'role'=>0
        ]);

         User::create([
             'name'=>'Unej',
             'email'=>'a@a',
             'password'=>bcrypt('a'),
             'role'=>1
         ]);
        College::create([
            'name'=>'unej',
            'user_id'=>1
        ]);

    }
}
