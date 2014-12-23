# Silex Service Provider for HAL

Adds a HAL builder object to the silex container which returns instances of HAL
objects from the [nocarrier/hal](https://packagist.org/packages/nocarrier/hal)
library.

Background on HAL:
- http://en.wikipedia.org/wiki/Hypertext_Application_Language
- http://stateless.co/hal_specification.html

## Usage

```
$app->register(new EasyBib\Silex\Provider\HALServiceProvider());

$hal = $app['hal']->build('/orders', ['customerId' => 'CUS1234']);
```

See the (Nocarrier\Hal documentation)[https://github.com/blongden/hal/blob/develop/README.md]
for more examples of how to use the HAL library itself.
