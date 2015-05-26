<?php
while (true) {
	$curl = curl_init("http://sphero-api.hopto.org/color/key/f74017ae97c8da031d48922cb3f65524/ball/0/red/".mt_rand(0,255)."/green/".mt_rand(0,255)."/blue/".mt_rand(0,255));
	echo PHP_EOL;
	curl_exec($curl);
	curl_close($curl);
}

