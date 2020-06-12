<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'subject', 'created_at', 'updated_at', 'finnished_at',
    ];

    protected $dates = ['created_at','finnished_at','updated_at'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function signature()
    {
        return $this->belongsTo('App\Signature');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }
    
}
