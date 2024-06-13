<?php

namespace App\Models\Feeds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedsCommentsModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'comments',
        'feed_id',
        'slug'
    ];
}
