<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'logo',
    ];

    public function terminals()
    {
        return $this->hasMany("App\Terminal");
    }
}
