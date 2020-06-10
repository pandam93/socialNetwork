<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function signatures()
    {
        return $this->hasMany('App\Signature');
    }
}
