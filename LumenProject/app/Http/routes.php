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

/**
 * @api {get} /roll/key/:key/ball/:ballId/angle/:angle/speed/:speed
 * @apiName RollBall
 * @apiGroup SpheroCommands
 * 
 * @apiParam {String} client api key 
 * @apiParam {Number} ball id number 0 - first ball, 1 - second ball, 2 - both balls
 * @apiParam {Number} angle from opposite backlight to travel 0-359
 * @apiParam {Number} speed 0-1000 increments of 10 on how fast ball should travel
 *
 * @apiSuccess {String} Success
 */ 
$app->get('/roll/key/{key}/ball/{ball}/angle/{angle}/speed/{speed}', function ($key, $ball, $angle, $speed) {
	try{
	    $redis = new Predis\Client();

	    if(!$redis->exists($key)){
			return 'This is not a registered key. Please register <a href="http://sphero-api.hopto.org">here</a>';
		}

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

	    $redis->lpush('spheroCommands', json_encode($data));
	    return 'Your command has been sent. You command is currently the ' . $redis->llen('spheroCommands') .' command. Watch they ball it will excute shortly.';
    }catch(Exception $E){
		return $E->getMessage();
	}
});

/**
 * @api {get} /color/key/:key/ball/:ballId/red/:red/green/:green/blue/:blue
 * @apiName ColorBall
 * @apiGroup SpheroCommands
 *
 * @apiParam {String} client api key 
 * @apiParam {Number} ball id number 0 - first ball, 1 - second ball, 2 - both balls
 * @apiParam {Number} angle from opposite backlight to travel 0-359
 * @apiParam {Number} speed 0-1000 increments of 10 on how fast ball should travel
 *
 * @apiSuccess {String} Success
 */
$app->get('/color/key/{key}/ball/{ball}/red/{red}/green/{green}/blue/{blue}', function ($key, $ball, $red, $green, $blue) {

	try{
		$redis = new Predis\Client();

		if(!$redis->exists($key)){
			return 'This is not a registered key. Please register <a href="http://sphero-api.hopto.org">here</a>';
		}

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

	    $redis->lpush('spheroCommands', json_encode($data));
	    return 'Your command has been sent. You command is currently the ' . $redis->llen('spheroCommands') .' command. Watch they ball it will excute shortly.';
	}catch(Exception $E){
		return $E->getMessage();
	}

});

/**
 * register route
 * 
 * @param {Request} data used to register account
 * @return {String}
 */
$app->post('/register', function (Request $Request) {
	// create hash
	$hash = md5($Request->email.$Request->firstName.$Request->lastName.$Request->position);
	
	// gather data
	$data = array(
		'email' 	=> $Request->email,
		'firstName' => $Request->firstName,
		'lastName' 	=> $Request->lastName,
		'position' 	=> $Request->position,
		'intersted' => $Request->intersted
	);

	foreach ($data as $key => $value) {
		if($key != 'intersted' && empty($value)){
			return json_encode(array("type" => "invalid", "field" => $key));
		}
	}

	try{
		// spin up redis
		$redis = new Predis\Client();

		// register the user
		$redis->set($hash, json_encode($data));

		// if(!$redis->exist("email_" . $hash)){
		// 	mail($Request->email, "Red Ventures - Sphero Registration", "<p>Thanks for registering, " . $Request->firstName .".<br /><br />Your API key is " . $hash ." and the docs to how to send the shpero commands is located <a href='sphero-api.hopto.org/docs' target='_blank'>here</a>. Have fun!</p>");
		// 	$redis->set("email_" . $hash);
		// }

		// return key
		return json_encode(array("type" => "success", "key" => $hash));
	}catch(Exception $E){
		return array("type" => "error", "message" => $E->getMessage());
	}
});
