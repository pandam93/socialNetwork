<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'rol', 'course_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasksToDo()
    {
        return $this->hasMany('App\Task','student_id');
    }

    public function taskOrders()
    {
        return $this->hasMany('App\Task','professor_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function signatures()
    {
        return $this->hasMany('App\Signature');
    }

    public function messagesRecieve()
    {
        return $this->hasMany('App\Message', 'to_id');
    }
    
    public function messagesSent()
    {
        return $this->hasMany('App\Message', 'from_id');
    }
}
