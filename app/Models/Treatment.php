<?php

namespace App\Models;

use App\Casts\MoneyCast;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Treatment
 *
 * @property int $id
 * @property string $description
 * @property string|null $notes
 * @property int $patient_id
 * @property int|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Treatment extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => MoneyCast::class,
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
