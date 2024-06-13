<?php

namespace App\Models\sectionsManagers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionsModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'departement_id',
        'commune_id',
        'section_name',
        'slug',
    ];
}
