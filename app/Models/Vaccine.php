<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = ['vaccine_type', 'vaccine_brand', 'current_dose', 'latest_dosage_date'];
    public $timestamps = false;
}
