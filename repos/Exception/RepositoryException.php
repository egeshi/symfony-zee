<?php

/**
 * Created by Antony Repin
 * Date: 12.03.2017
 * Time: 19:59
 */

namespace Repositories\Exception;

class RepositoryException extends \Exception
{
    public function __construct($model = null, $message = "", $code = 0, Exception $previous = null) {
        parent::__construct("Class {$model} must be an instance of Illuminate\\Database\\Eloquent\\Model", 500);
    }
}
