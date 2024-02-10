<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;

    protected $table = 'blood_requests';

    protected $fillable = [
        'blood_type',
        'city',
        'area_in_city',
        'building',
        'required_before',
        'contact_no',
        'contact_person_name',
        'user_id',
    ];
}
