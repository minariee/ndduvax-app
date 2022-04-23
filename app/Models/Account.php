<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'occupation',
    ];

    public function latestVaccine()
    {
        return $this->vaccines()->orderBy('latest_dosage_date', 'desc')->get()->first();
    }

    public function vaccines()
    {
        return $this->hasMany(Vaccine::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
