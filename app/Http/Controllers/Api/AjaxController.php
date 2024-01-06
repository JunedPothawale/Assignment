<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\State;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getState(State $state ,$id)
    {
        return $state->getState($id);
    }
    public function getCity(Cities $cities ,$id)
    {
        return $cities->getCities($id);
    }
}
