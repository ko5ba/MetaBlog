<?php

namespace App\Models;

use App\Traits\HasCasts;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasCasts;

    protected $table = 'post_tag';
}
