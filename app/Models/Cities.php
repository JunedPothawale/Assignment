<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = "cities";



    protected function getCitiesByState($id)
    {
        return $this->where('state_id', '=', $id)->get('*');
    }


    public function getCities($id)
    {
        return $this->getCitiesByState($id);
    }
}
