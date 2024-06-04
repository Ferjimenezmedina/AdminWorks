<?php

/**
 * Created by PhpStorm.
 * User: isra
 * Date: 28/06/2016
 * Time: 01:01 PM
 */
namespace empleaDos\Repositories;


abstract class BaseRepository
{
    /**
     * @return \empleaDos\Entities\Entity
     */
    abstract public function getModel();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
        return $this->getModel()->newQuery();
    }

    public function findOrFail($id)
    {
        return $this->newQuery()->findOrFail($id);
    }
}