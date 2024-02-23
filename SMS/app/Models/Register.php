<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
      protected $fillable = [
        'firstname',
        'lastname',
        'email',
        
        'password',
        'confirm_password'
    ];
    use HasFactory;
}