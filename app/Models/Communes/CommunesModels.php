<?php

namespace App\Models\Communes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunesModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'ville_id',
        'commune_name',
        'slug',
    ];
}
