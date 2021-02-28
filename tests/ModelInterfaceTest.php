<?php

declare(strict_types=1);

namespace Buyersclub\Laravel\Eloquent\Tests;

use Buyersclub\Laravel\Eloquent\ModelInterface;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

final class ModelInterfaceTest extends TestCase
{
    public function test_is_compatible_with_laravel_eloquent_model() : void
    {
        $model = new class extends Model implements ModelInterface {
            //
        };

        $this->assertInstanceOf(
            ModelInterface::class,
            $model,
        );
    }
}
