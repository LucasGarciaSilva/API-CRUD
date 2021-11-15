<?php
/**
 * User: Lucas
 * Date: 15/11/2021
 */

namespace App\Modules\Models;


use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = false;
    protected $table = 'idMarca';

    /////////// RELACIONAMENTOS //////////

    // muitas marcas para um  carro

    ////////////////////////////////////

}
