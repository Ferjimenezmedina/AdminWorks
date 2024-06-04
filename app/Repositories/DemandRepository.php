<?php
/**
 * Created by PhpStorm.
 * User: isra
 * Date: 08/07/2016
 * Time: 10:40 AM
 */

namespace empleaDos\Repositories;


use empleaDos\Entities\Company\Demand;

class DemandRepository extends BaseRepository
{
    public function  getModel()
    {
        return new Demand();   
    }

    public function storeDemand($requis = Array(), $id)
    {
        foreach ($requis as $requi) {
            $dem =  $this->getModel();
            $dem->vacant_id = $id;
            $dem->demand = $requi;
            $dem->save();
        }
    }

}