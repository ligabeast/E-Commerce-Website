<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleHasCategory extends Model
{
    use HasFactory;
    protected $table = 'article_has_category';
    public $timestamps = false;
}
