<?php

namespace App\Models\Cotisations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionModels extends Model
{
    use HasFactory;
    protected $fillable = [
        'cotisations_code',
        'montant',
        'operations',
        'method_payment',
        'date_transaction',
        'status',
        'slug'
    ];
}
