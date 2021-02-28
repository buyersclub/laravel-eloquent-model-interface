<?php

declare(strict_types=1);

namespace Buyersclub\Laravel\Eloquent;

interface ModelInterface
{
    public function is($model);

    public function getKey();
}
