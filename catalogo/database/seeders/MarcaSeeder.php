<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marcas')->insert(
            [
                [ 'mkNombre'=>'Apple' ],
                [ 'mkNombre'=>'Oppo' ],
                [ 'mkNombre'=>'Marshall' ],
                [ 'mkNombre'=>'iRobot' ],
                [ 'mkNombre'=>'Xiaomi' ],
                [ 'mkNombre'=>'Samsung' ],
                [ 'mkNombre'=>'Nikon' ],
                [ 'mkNombre'=>'Bose' ],
                [ 'mkNombre'=>'OnePlus' ],
                [ 'mkNombre'=>'Blaupunkt' ]
            ]
        );
    }
}
