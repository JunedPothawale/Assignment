<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class State extends Model
{
    use HasFactory;
    protected $table = "states";
    protected function getStatesById($id)
    {
        return $this->where('country_id', '=', $id)->get('*');
    }

    public function getState($id)
    {
        return $this->getStatesById($id);
    }
}
