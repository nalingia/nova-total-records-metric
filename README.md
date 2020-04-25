# Nova Total Records Metric
This package provides a metric to show how many records exist for a model.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nalingia/nova-total-records-metric)](https://packagist.org/packages/nalingia/nova-total-records-metric)
![License](https://img.shields.io/github/license/nalingia/nova-total-records-metric)

## Installation

```shell
composer require nalingia/nova-total-records-metric
```

## Usage

Use the trait `HasTotal` in your metric class and use the `total` method.

```php
use Nalingia\TotalRecords\HasTotal;

class TotalUsers extends Value
{

    use HasTotal;

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->total($request, User::class);
    }
}
```