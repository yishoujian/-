<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Food
 *
 * @mixin \Eloquent
 */
class Food extends Model
{
    protected $fillable=["name","money","intro"];
}
