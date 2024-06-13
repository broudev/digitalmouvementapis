<?php

namespace App\Models\Cotisations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldeModels extends Model
{
    use HasFactory;
    protected $fillable = [
        'montants',
        'slug'
    ];
}
