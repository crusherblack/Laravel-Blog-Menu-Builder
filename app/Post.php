<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;


class Post extends Model
{
    use Gutenbergable;

    protected $guarded = [];
}
