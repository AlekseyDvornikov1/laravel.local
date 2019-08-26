<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 22.08.2019
 * Time: 13:32
 */

namespace App\Repositories;

use App\Models\BlogCategory as Model;

/**
 * Class BlogCategoryRepository
 * @package App\Repositories
 */
class BlogCategoryRepository extends CoreRepository
{

    /**
     * @return mixed|string
     */
    public function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application[]|\Illuminate\Database\Eloquent\Collection|Model[]|mixed[]
     */
    public function getComboBox()
    {
        return $this->startConditions()->all();
    }


}
