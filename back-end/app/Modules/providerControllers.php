<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 23/06/2018
 * Time: 18:01
 */

namespace App\Modules;


use Illuminate\Support\ServiceProvider;

class providerControllers extends ServiceProvider
{
    public function boot()
    {

        if(file_exists(__DIR__ .'/'.'Controllers'.'/routes.php'))
        {
            include __DIR__ . '/'.'Controllers'.'/routes.php';
        }

    }

}
