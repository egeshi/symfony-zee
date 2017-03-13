<?php

/**
 * Created by Antony Repin
 * Date: 12.03.2017
 * Time: 18:39
 */

namespace Repositories\Contracts;

/**
 * Interface RepositoryInterface
 * @package Repositories\Contracts
 */
interface RepositoryInterface
{
    /**
     * @param array $columns
     */
    public function all($columns = array('*'));

    /**
     * @param int $perPage
     * @param array $columns
     */
    public function paginate($perPage = 15, $columns = array('*'));

    /**
     * @param array $data
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param $id
     */
    public function update(array $data, $id);

    /**
     * @param $id
     */
    public function delete($id);

    /**
     * @param $id
     * @param array $columns
     */
    public function find($id, $columns = array('*'));

    /**
     * @param $field
     * @param $value
     * @param array $columns
     */
    public function findBy($field, $value, $columns = array('*'));
}
