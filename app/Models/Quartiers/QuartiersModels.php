<?php

namespace App\Models\Quartiers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuartiersModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'commune_id',
        'quartiers_name',
        'slug',
    ];
}
