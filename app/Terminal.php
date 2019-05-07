<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = [
        'address', 'city', 'state', 'company_id'
    ];

    public function companies()
    {
        return $this->belongsToo("App\Company");
    }
}
