<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    protected function getPasswordByEmail($email)
    {
        $user = new User;
        return $user->where('email','=',$email)->get(['password','id']);
    }
    public function getPassword($email)
    {
        return $this->getPasswordByEmail($email);
    }
}
