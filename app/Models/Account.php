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
        'proof_of_vaccination',
    ];

    public function vaccines()
    {
        return $this->hasMany(Vaccine::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
