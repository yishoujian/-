<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable=["title","content","category_id"];
    //声明一个方法
    public function ArticleCategory(){

        return $this->belongsTo(ArticleCategory::class,"category_id");
    }
}
