<?php

namespace App\Models;

use App\Scopes\ItemScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'status',
    ];

    /**
     * モデルの「起動」メソッド
     *
     * @return void
     */
    protected static function booted()
    {
        // 匿名のグローバルスコープの適用（eloquentモデルにグローバルスコープを追加するパターン）
        static::addGlobalScope('item', function (Builder $builder) {
            $builder->where('updated_at', '>', now()->subYears(2000));
        });

        // ItemScopeの適用（scopeファイルを作成して、グローバルスコープを追加するパターン）
        static::addGlobalScope(new ItemScope);
    }
}
