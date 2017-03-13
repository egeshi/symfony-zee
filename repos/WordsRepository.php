<?php
/**
 * Created by Antony Repin
 * Date: 12.03.2017
 * Time: 21:29
 */

namespace Repositories;


class WordsRepository extends Repository
{
    function model()
    {
        return 'App\Models\Word';
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

}
