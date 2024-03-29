<?php

declare(strict_types=1);

namespace Buyersclub\Laravel\Eloquent;

interface EloquentModelInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function query();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery();

    /**
     * @param  array  $options
     * @return bool
     */
    public function save(array $options = []);

    /**
     * @return bool|null
     */
    public function delete();

    /**
     * @return int|string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getKeyName();

    /**
     * @return string
     */
    public function getTable();

    /**
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     * @return bool
     */
    public function is($model);

    /**
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     * @return bool
     */
    public function isNot($model);

    /**
     * @param  array|string|null  $attributes
     * @return bool
     */
    public function wasChanged($attributes = null);

    /**
     * @return array
     */
    public function getChanges();

    /**
     * @return array
     */
    public function getAttributes();

    /**
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed|array
     */
    public function getOriginal($key = null, $default = null);

    /**
     * @param  array|string|null  $attributes
     * @return bool
     */
    public function isClean($attributes = null);

    /**
     * @return array
     */
    public function getDirty();

    /**
     * @return bool
     */
    public function totallyGuarded();

    /**
     * @return mixed
     */
    public function getRouteKey();

    /**
     * @return array
     */
    public function toArray();
}
