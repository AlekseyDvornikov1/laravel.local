<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 04.09.2019
 * Time: 22:36
 */

namespace App\Repositories;

use App\Models\BlogPost as Model;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogPostRepository extends CoreRepository
{
    /**
     * @return mixed|string
     */
    public function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param $perPage
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate($perPage = 25)
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'category_id',
            'user_id'
        ];

        $result = $this->startConditions()
            ->select($columns)
            ->orderBy('id','DESC')
            ->with(['category:id,title','user:id,name'])
            ->paginate($perPage);


        return $result;
    }



}
