<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// $ips = [
//     '149.3.23.245',
//     '85.117.62.171',
//     '127.0.0.1',
//     '91.151.137.54',
//     '176.221.140.236',
//     '91.151.136.82',
//     '109.172.163.170',
//     '212.58.121.47',
//     '91.151.137.60',
//     '85.117.62.176',
//     '212.58.103.119',
//     '188.129.196.228',
//     '109.172.174.190'
// ];

// if (!in_array($_SERVER['REMOTE_ADDR'], $ips)) {
//     echo 'Coming soon...';
//     exit();
// }

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
