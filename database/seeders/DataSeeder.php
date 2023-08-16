<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('databases')->insert(
            [
                'nama' => 'kresno',
                'nomor_id' => '13512',
                'alamat' => 'Jl. Damar Utara V 257 Semarang',
            ]
        );
        // DB::table('databases')->insert(
        //     [
        //         'nama' => 'kresno',
        //         'nomor_induk' => '13512',
        //         'nama' => 'Jl. Damar Utara V 257 Semarang',
        //     ]
        // );
        // DB::table('databases')->insert(
        //     [
        //         'nama' => 'bimantoro',
        //         'nomor_induk' => '44542',
        //         'nama' => 'Jl. Ambarawa',
        //     ]
        // );
        // DB::table('databases')->insert(
        //     [
        //         'nama' => 'notorobi',
        //         'nomor_induk' => '26537',
        //         'nama' => 'Jl. Ungaran Kab Semarang',
        //     ]
        // );
    }
}
