<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Post_softwares extends Pivot
{
    use HasFactory;

    public $table = 'posts_softwares';
    protected $guarded = [];
    public $incrementing = true;
    public $timestamps = false;
}
