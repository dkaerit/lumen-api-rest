<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController {
    public function version() {
        return "Lumen (8.3.4) (Laravel Components ^8.0)";
    }
}
