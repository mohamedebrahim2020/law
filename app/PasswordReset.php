<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $fillable = [
        'email', 'token','otp_token','updated_at'
    ];
    // public $timestamps = false;
}
