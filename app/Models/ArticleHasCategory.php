<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ArticleHasCategory
 *
 * @property int $id
 * @property int $article_category_id
 * @property int $article_id
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleHasCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleHasCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleHasCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleHasCategory whereArticleCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleHasCategory whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleHasCategory whereId($value)
 * @mixin \Eloquent
 */
class ArticleHasCategory extends Model
{
    use HasFactory;
    protected $table = 'article_has_category';
    public $timestamps = false;
}
