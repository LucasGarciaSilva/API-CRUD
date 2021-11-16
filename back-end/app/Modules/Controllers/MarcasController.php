<?php
/**
 * User: Lucas
 * Date: 12/11/2021
 */

namespace App\Modules\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Models\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{

    public function getMarcas()
    {
        try
        {

            return  Marca::all();

        }
        catch (\Exception $exception)
        {
            return ['status' => false, 'message' => $exception];
        }
    }

}
