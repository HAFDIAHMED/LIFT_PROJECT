<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Realisation extends Model
{
    protected $table = "realisations";
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
