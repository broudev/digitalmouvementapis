<?php

namespace App\Models\Cotisations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirementsModels extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'montants',
        'slug'
    ];
}
