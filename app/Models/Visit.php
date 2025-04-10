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
        'visitor_id',
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

    public function visitor(): BelongsTo
    {
        return $this->belongsTo(Visitor::class);
    }

    public function histories(): HasMany
    {
        return $this->hasMany(VisitHistory::class, 'visit_id');
    }
}
