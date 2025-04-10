<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'company_or_address',
        'contact_number',
        'email_address',
        'id_proof_type',
        'id_proof_number',
        'vehicle_number'
    ];

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class, 'visitor_id', 'id');
    }
}
