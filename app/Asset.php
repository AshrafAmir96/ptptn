<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'assets';

    protected $fillable = ['name', 'display_name', 'description','price','date','type'];

    protected $casts = [
        'removable' => 'boolean'
    ];
}
