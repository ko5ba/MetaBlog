<?php

namespace App\Models;

use App\Traits\HasCasts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;
    use HasCasts;

    protected $guarded = [];
    protected $table = 'tags';

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
