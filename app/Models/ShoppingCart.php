<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShoppingCart
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart query()
 * @property int $id
 * @property int $user_id
 * @property int $article_id
 * @property string $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingCart whereUserId($value)
 * @mixin \Eloquent
 */
class ShoppingCart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';
    public $timestamps = false;
}
