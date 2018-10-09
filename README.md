# Priceva SDK

SDK for Priceva API (PHP)

# Getting Started

## Requirements

* PHP >= 5.4
* cURL library
* JSON library

## Installing

### Via Composer

Go to the project root directory and run:
````bash
$ php composer require priceva/priceva-sdk-php
````
or add this string in `require` section of your `composer.json`:
````
"priceva/priceva-sdk-php": "dev-master"
````
and run `composer install`.

### Without Composer

1. Download our library.
2. Include files in your php root file:
    ````php
    include_once '/path/to/lib/PricevaAPI.php';
    include_once '/path/to/lib/PricevaException.php';
    include_once '/path/to/lib/Request.php';
    include_once '/path/to/lib/Result.php';
    ````
    
## Use

````php
use Priceva\PricevaAPI;


try{
    require_once __DIR__ . "/../vendor/autoload.php"; // or include our files directly, if you dont want to use composer

    $api = new PricevaAPI('your_api_key');

    $result = $api->main_ping();

}catch( \Exception $e ){
    // error handler
}
````
