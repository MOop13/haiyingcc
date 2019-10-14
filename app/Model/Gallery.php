<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'gallery';
    protected $fillable = [
        'url',
        'belong_to',
        'created_at',
        'updated_at',
    ];
}
