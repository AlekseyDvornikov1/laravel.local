<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogCategory
 * @package App\Models
 *
 * @property-read string $parentTitle
 */
class BlogCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','slug','parent_id','description'];

    public const ROOT = 1;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function parentCategory()
    {
        return $this->belongsTo(BlogCategory::class,'parent_id','id');
    }

    /**
     *
     */
    public function getParentTitleAttribute()
    {
        return $this->parentCategory->title ?? (
            $this->isRoot()
                ? 'Корень'
                : '???');
    }

//    /**
//     * Пример аксесора
//     */
//    public function getTitleAttribute($valueFromObject)
//    {
//        return mb_strtoupper($valueFromObject);
//    }
//
//    /**
//     * Пример мутатора
//     * @param $incomingValue
//     */
//    public function setTitleAttribute($incomingValue)
//    {
//        $this->attributes['title'] = mb_strtolower($incomingValue);
//    }

    public function isRoot()
    {
        return $this->id === self::ROOT;
    }
}
