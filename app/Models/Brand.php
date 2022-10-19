<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $table = 'brands';

    protected $fillable = [
        'id', 'name', 'country'
    ];
}
