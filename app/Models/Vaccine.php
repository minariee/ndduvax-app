<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vaccine extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'vaccine_type',
        'vaccine_brand',
        'latest_dosage_date',
        'proof_of_vaccination',
    ];
    public $timestamps = false;

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
