<?php

/**
 * Created by Antony Repin
 * Date: 12.03.2017
 * Time: 19:51
 */

namespace Repositories;

use Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Repositories\Exception\RepositoryException;
use Illuminate\Container\Container as App;
use Illuminate\Support\Collection;

/**
 * Class Repository
 * @package Repositories
 */
abstract class Repository implements RepositoryInterface
{

    /**
     * @var App
     */
    private $app;

    /**
     * @var mixed
     */
    protected $model;

    /**
     * Repository constructor.
     * @param App $app
     * @param Collection $collection
     */
    public function __construct(App $app, Collection $collection){
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * @return mixed
     */
    abstract function model();

    /**
     * @param array $columns
     */
    public function all($columns=["*"]){
        return $this->model->get($columns);
    }

    /**
     * @return mixed
     * @throws RepositoryException
     */
    public function makeModel(){

        $model = $this->app->make($this->model());

        if (!$model instanceof Model){
            throw new RepositoryException($model);
        }

        return $this->model = $model->newQuery();
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param int $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @return Model
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * @param sting $attribute
     * @param mixed $value
     * @param array $columns
     * @return Model
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

}
