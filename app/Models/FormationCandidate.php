<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class FormationCandidate extends Model
{
    use HasFactory;

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'formation_candidates';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'current_job',
        'hobbie',
        'ville',
        'goal',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at'=>'datetime:d/m/Y H:i',
        'updated_at'=>'datetime:d/m/Y H:i',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Summary of paiement
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paiement(): HasOne{
        return $this->hasOne(FormationPaiement::class, foreignKey:'candidate_code', localKey:'code');
    }

     public static function generateUniqueCode()
    {
       do {
            //$letters = strtoupper(Str::random(2));
            $digits = rand(100000, 999999);
            $code = "MH-" . $digits;
        } while (self::where('code', $code)->exists());
        return $code;
    }
}