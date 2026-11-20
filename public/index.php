<?php
<<<<<<< HEAD
declare(strict_types=1);
session_start();
require __DIR__.'/../vendor/autoload.php';
use App\Models\Product;
use App\Controllers\ProductController;
$_SESSION['token']??=bin2hex(random_bytes(32));
$c=require __DIR__.'/../config.php';
try {
 $db=new PDO($c['dsn'],$c['user'],$c['password'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES=>false]);
 (new ProductController(new Product($db)))->index();
} catch (PDOException $e) {
 error_log($e->getMessage()); http_response_code(500);
 echo 'Database gagal diakses. Periksa konfigurasi dan log server.';
}
=======

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
>>>>>>> 7335b42a1a97498fcf980e2759ce0142b70eb783
