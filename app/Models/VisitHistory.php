<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VisitHistory extends Model
{
    use HasFactory;


    protected $fillable = [
        'visit_id',
        'updated_by',
        'update_timestamp',
        'changes',
        'account_id'
    ];

    protected $casts = [
        'changes' => 'array',
        'update_timestamp' => 'datetime',
    ];

    public function visit(): BelongsTo
    {
        return $this->belongsTo(Visit::class, 'visit_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
