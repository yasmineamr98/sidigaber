<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify the table name (if not following Laravel's naming convention)
    protected $table = 'users';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
    ];

    // Disable timestamps if not using them
    public $timestamps = true;

    // Mutator for password attribute to hash it
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Optionally, you can define the hidden fields for user serialization
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Optionally, you can add any other custom methods you may need
}
