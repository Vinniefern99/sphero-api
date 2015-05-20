<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return file_get_contents("welcome.php");
});

$app->get('/nextCommand', function () use ($app) {
    $redis = new Predis\Client();
    return $redis->rpop('spheroCommands');
});

$app->get('/roll/ball/{ball}/angle/{angle}/speed/{speed}', function ($ball, $angle, $speed) {
    $validBalls = array ('0', '1', '2');

    if (!in_array($ball, $validBalls)) {
        return 'Invalid ballId';
    }

    if ($angle > 359 || $angle < 0) {
        return 'Invalid angle...should be between 0 and 359';
    }

    if ($speed > 1000 || $speed < 10) {
        return 'Invalid speed...shoudl be between 10 and 1000';
    }
    $data = array(
        'action' => 'roll',
        'angle' => $angle,
        'speed' => $speed,
        'ball' => $ball
    );

    $redis = new Predis\Client();
    $redis->lpush('spheroCommands', json_encode($data));
    return 'Success';
});

$app->get('/color/ball/{ball}/red/{red}/green/{green}/blue/{blue}', function ($ball, $red, $green, $blue) {

    $validBalls = array ('0', '1', '2');

    if (!in_array($ball, $validBalls)) {
        return 'Invalid ballId';
    }

    $min = 0;
    $max = 255;

    if ($red < $min || $red > $max) {
        return 'Invalid red value...should be between 0 and 255';
    }
    if ($green < $min || $green > $max) {
        return 'Invalid green value...should be between 0 and 255';
    }

    if ($blue < $min || $blue > $max) {
        return 'Invalid blue value...should be between 0 and 255';
    }

    $data = array(
        'action' => 'color',
        'red' => $red,
        'green' => $green,
        'blue' => $blue,
        'ball' => $ball
    );

    $redis = new Predis\Client();
    $redis->lpush('spheroCommands', json_encode($data));
    return 'Success';

});

$app->post('/register', function (Request $Request) {
	$hash = md5($Request->email.$Request->firstName.$Request->lastName.$Request->position.$Request->intersted);
	$data = array(
		'email' 	=> $Request->email,
		'firstName' => $Request->firstName,
		'lastName' 	=> $Request->lastName,
		'position' 	=> $Request->position,
		'intersted' => $Request->intersted
	);

	$redis = new Predis\Client();
	$redis->set($hash, json_encode($data));
	return $hash;
});
