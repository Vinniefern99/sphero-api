<?php
while (true) {
	$curl = curl_init("http://sphero-api.hopto.org/roll/key/f74017ae97c8da031d48922cb3f65524/ball/2/angle/".mt_rand(0,359)."/speed/".mt_rand(10,1000));
	echo PHP_EOL;
	curl_exec($curl);
	curl_close($curl);
}

