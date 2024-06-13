<?php

namespace App\Models\Feeds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedsModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'contents',
        'feed_illustration_url',
        'counters',
        'comments_counters',
        'slug',
    ];
}
