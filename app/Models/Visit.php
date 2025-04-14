<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Visit extends Model
{
    use HasFactory;


    protected $fillable = [
        'full_name',
        'company_or_address',
        'contact_number',
        'email_address',
        'id_proof_type',
        'id_proof_number',
        'vehicle_number',
        'purpose',
        'visit_date',
        'time_in',
        'time_out',
        'stay_time',
        'entry_authorized_by',
        'pass_number',
        'status',
        'remarks',
        'picture_url',
        'updated_by',
        'update_timestamp'
    ];

    public function histories(): HasMany
    {
        return $this->hasMany(VisitHistory::class, 'visit_id');
    }
}
