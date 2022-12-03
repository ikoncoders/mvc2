<?php 

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\SiteController;

	/*** Author: Ikonc */

    require_once __DIR__ . '/../vendor/autoload.php';

	$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
	$dotenv->load();

	$config = [
		'userClass' => \app\models\User::class,
	'db' => [
			'dsn' => $_ENV['DB_DSN'],
			'user' => $_ENV['DB_USER'],
			'password' => $_ENV['DB_PASSWORD'],
			]
		];

	$app = new Application(dirname(__DIR__), $config); 
	
	$app->router->get('/', [SiteController::class, 'home']);  //array
	$app->router->get('/contact', [SiteController::class, 'contact']);   //array
    $app->router->post('/contact', [SiteController::class, 'contact']); //array

	//auth
	$app->router->get('/login', [AuthController::class, 'login']);  
	$app->router->post('/login', [AuthController::class, 'login']);  
	$app->router->get('/register', [AuthController::class, 'register']);  
	$app->router->post('/register', [AuthController::class, 'register']); 
	
	//logout
	$app->router->get('/logout', [AuthController::class, 'logout']); 

	//profile 
	$app->router->get('/profile', [AuthController::class, 'profile']); 
	$app->run();