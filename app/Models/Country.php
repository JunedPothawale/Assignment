<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = "countries";
    protected function getAllCountries()
    {
        return $this->all('*');
    }

    public function getCountries()
    {
        return $this->getAllCountries();
    }
}
