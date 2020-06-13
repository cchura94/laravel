<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /*
    protected $table = "mi_categoria";

    protected $primaryKey = 'id_categoria';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $connection = 'mibd';
    */

    public function productos()
    {
        return $this->hasMany("App\Producto");
    }

    /*public function cantidad_prod()
    {
        return $this->productos()->count();
    }*/
}
