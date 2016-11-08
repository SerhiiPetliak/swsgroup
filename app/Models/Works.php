<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    public $timestamps = false;
    public $fillable = [
        'title',
        'description',
        'img',
    ];
}
