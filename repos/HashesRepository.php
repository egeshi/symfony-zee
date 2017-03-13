<?php
/**
 * Created by Antony Repin
 * Date: 12.03.2017
 * Time: 21:33
 */

namespace Repositories;

/**
 * Class HashesRepository
 * @package Repositories
 */
class HashesRepository extends Repository
{
    /**
     * @return string
     */
    function model()
    {
        return 'App\Models\Hash';
    }

    /**
     * @param int $perPage
     * @param array $columns
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

}
