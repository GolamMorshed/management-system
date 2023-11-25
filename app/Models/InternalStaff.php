<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalStaff extends Model
{
    use HasFactory;
    protected $table = "internal_staff";
    protected $fillable = [
        'initial',
        'first_name',
        'last_name',
        'DOB',
        'email',
        'phone_no',
        'password',
        'employment_type'
    ];
}
