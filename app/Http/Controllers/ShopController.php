<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{

    private function getStatus($num)
    {
        if ($num === 1) {
            return true;
        } else {
            return false;
        }
    }
}
