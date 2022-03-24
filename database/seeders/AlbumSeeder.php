<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('albums')->insert([
            'nom' => '',
            'description' => '',
            'auteur' => '',
            'photo' => '',
        ]);
    }
}
