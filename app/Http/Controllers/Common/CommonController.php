<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function genderConverter($id)
    {
        if ($id == 0) {
            return "Male";
        } else if ($id == 1) {
            return "Female";
        }
    }
}
