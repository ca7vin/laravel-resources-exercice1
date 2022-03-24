<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'name' => 'Van der Ghinst',
            'firstname' => 'Calvin',
            'age' => '27',
            'borndate' => '1994-12-05',
            'email' => 'ca7vin@gmail.com',
            'password' => Hash::make('mostwanted12'),
            'album' => '4',
        ]);
    }
}
