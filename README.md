# PHP library for the Hetzner Cloud API by Exploriment

![License](https://poser.pugx.org/exploriment/hcloud-php/license) ![Latest Stable Version](https://poser.pugx.org/exploriment/hcloud-php/version) ![Total Downloads](https://poser.pugx.org/exploriment/hcloud-php/downloads)

## Installation: Composer

You can install this library via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require exploriment/hcloud-php
```

## Documentation and examples

Full technical documentation can be found in `DOCUMENTATION.md`. The more user-friendly documentation can be found in the [wiki](https://github.com/Exploriment/hcloud-php/wiki/resources).

### HetznerCloud

```php
<?php
use Exploriment\HetznerCloud;

/**
 * set your API token like this and you are ready to
 * make API calls using this library!
 */
HetznerCloud\HetznerCloud::setToken('my_token_here');

// retrieve the pricing object
$pricing = HetznerCloud\HetznerCloud::getPricing();

/**
 * retrieve the rate limit status, returns the following:
 * 
 * object(stdClass)#1 (3) {
 *    ["limit"]=>
 *    int(0)
 *    ["remaining"]=>
 *    int(0)
 *    ["reset"]=>
 *    int(1517655111)
 *  }
 * 
 * values of these will be `null` if no requests to the API were made
 */
$rateLimit = HetznerCloud\HetznerCloud::getRateLimit();
```

## Prerequisites and dependencies
- PHP 5.6.4 or higher
- ext-mbstring
- ext-json
- ext-curl _(recommended)_
- [Laravel Collections](https://laravel.com/docs/5.4/collections)
- [GuzzlePHP](http://docs.guzzlephp.org/en/stable/)

# License
MIT