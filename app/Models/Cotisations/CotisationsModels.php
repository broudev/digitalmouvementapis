<?php

namespace App\Models\Cotisations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotisationsModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type_cotisations_id',
        'cotisations_code',
        'annee_cotisations',
        'montant_cotisations',
        'payments_cotisations',
        'slug'
    ];
}
