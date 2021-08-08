<?php

declare(strict_types=1);

namespace Buyersclub\Laravel\Eloquent\Tests;

use Buyersclub\Laravel\Eloquent\EloquentModelInterface;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

final class EloquentModelInterfaceTest extends TestCase
{
    /** @test */
    public function the_interface_is_compatible_with_laravel_eloquent_model() : void
    {
        $model = new class extends Model implements EloquentModelInterface {
            //
        };

        $this->assertInstanceOf(
            EloquentModelInterface::class,
            $model,
        );
    }
}
