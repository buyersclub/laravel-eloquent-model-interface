<p align="center">
    <a href="https://packagist.org/packages/buyersclub/laravel-eloquent-model-interface"><img src="https://img.shields.io/packagist/v/buyersclub/laravel-eloquent-model-interface" alt="Latest Stable Version"></a>
    <a href="https://github.com/buyersclub/laravel-eloquent-model-interface/blob/master/LICENSE.md"><img src="https://img.shields.io/packagist/l/buyersclub/laravel-eloquent-model-interface" alt="License"></a>
</p>

# Model Interface

Polyfill for the \"missing\" Laravel Eloquent model interface.

# Installation

```bash
composer require buyersclub/laravel-eloquent-model-interface
```

# Why

If you are using interfaces for your models, you might have methods that return an arbitrary model,
in those cases it convenient to be able to use a typehint that reflects that.
Without this polyfill this can only be done by typehinting `\Illuminate\Database\Eloquent\Model` which
will not be fully compatible with your model interfaces, by introducing this base interface that your
model interfaces can extand this problem can be solved.

This is especially useful when you are using static analyzers such as PHPStan or similar.

# Usage

```
use Buyersclub\Laravel\Eloquent\EloquentModelInterface;

interface UserInterface extends EloquentModelInterface
{
    //
}
```
