<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ORM

        $cat = new Categoria;
        $cat->nombre = "Ropa";
        $cat->descripcion = "Ropa de niños";
        $cat->save();

        $cat2 = new Categoria;
        $cat2->nombre = "Muebles";
        $cat2->descripcion = "Muebles de oficina";
        $cat2->save();

        $cat3 = new Categoria;
        $cat3->nombre = "Juguetes";
        $cat3->descripcion = "Juguetes de niños";
        $cat3->save();
    }
}
