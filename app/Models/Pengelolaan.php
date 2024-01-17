<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelolaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'pengelolaan';
    protected $fillable = [
        'name','step', 'manfaat', 'img'
    ];
}
