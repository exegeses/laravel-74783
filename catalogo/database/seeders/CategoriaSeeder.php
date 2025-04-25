<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('categorias')->insert([])
        Categoria::insert(
            [
                [ 'catNombre'=>'Smartphone' ],
                [ 'catNombre'=>'Parlantes Bluetooth' ],
                [ 'catNombre'=>'Robot de limpieza' ],
                [ 'catNombre'=>'Smat TV' ],
                [ 'catNombre'=>'Cámaras Mirrorless' ],
                [ 'catNombre'=>'Iluminación inteligente' ],
            ]
        );

    }
}
