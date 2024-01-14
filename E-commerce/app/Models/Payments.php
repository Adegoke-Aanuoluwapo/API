<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollment;
class Payments extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enrollment_id', 'paid_date', 'amount'];
    use HasFactory;


    function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}


