<?php

namespace Database\Seeders;

use App\Models\College;
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
        College::create([
           'name'=>'unej'
        ]);
//         \App\Models\User::create([
//             'name'=>'asif',
//             'email'=>'a@a',
//             'password'=>bcrypt('a'),
//             'college_id'=>'1',
//             'role'=>0
//         ]);
    }
}
