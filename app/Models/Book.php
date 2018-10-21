<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\models\Book
 *
 * @mixin \Eloquent
 */
class Book extends Model
{
    protected $fillable=["name","content"];
}
