Laravel PostcodeNL API package
==============

Integrates the PostcodeNL API with 6 via a ServiceProvider and Facade. This package currently supports only the validation of dutch addresses.



### Installation

```
composer require hennio/postcodenlapi
```

Add a ServiceProvider to your providers array in `config/app.php`:
```php
    'providers' => [
    	//other things here

    	Hennio\Postcodenlapi\PostcodenlapiServiceProvider::class,
    ];
```

Add the facade to the facades array:
```php
    'aliases' => [
    	//other things here    	
        'Postcodenlapi' => Hennio\Postcodenlapi\Facades\Postcodenlapi::class,
    ];
```



### Configuration

##### Via .env

Put your postcode.nl api-keys in your .env-file

```
POSTCODENL_KEY= [...]
POSTCODENL_SECRET= [...]
```



##### Publish the config

```
php artisan vendor:publish --provider="Hennio\Postcodenlapi\PostcodenlapiServiceProvider"
```

Alternatively set your api `key` and `secret` in the `config/postcodenlapi.php`



### Usage

To get the `street` and `city` linked to a Dutch `postalcode`, `housenr` and `extension`. The response is returned in json format, ideal for ajax.
```php
use Postcodenlapi;

$data = Postcodenlapi::validateDutch('1010AA', '1', 'a');

```
