<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // 
         protected   $table='students';
         protected    $primaryKey='id';
        protected $fillable=['name', 'guardian','phone','address', 'mobile','school', 'department', 'subtaken', 'diffsub','intresub','intended_school', 'jamb_comb'];
            use HasFactory;
}