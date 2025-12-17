<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'cover_image',
        'description',
        'author',
        'artist',
        'genre',
        'status',
        'release_date',
    ];
}
