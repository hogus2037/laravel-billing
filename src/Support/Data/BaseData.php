<?php
/**
 * Created by PhpStorm.
 * User: wugang
 * Date: 2018/9/29
 * Time: 下午3:58
 */

namespace Hogus\LaravelBilling\Support\Data;

abstract class BaseData
{
    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $property => $value) {
            $method = 'set' . ucfirst(camel_case($property));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    abstract public function toArray();
}
