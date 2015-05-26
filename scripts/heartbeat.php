<?php
while (true) {
	$curl = curl_init("http://sphero-api.hopto.org/color/key/f74017ae97c8da031d48922cb3f65524/ball/1/red/255/green/255/blue/255");
	echo PHP_EOL;
	curl_exec($curl);
	sleep(1);
	$curl = curl_init("http://sphero-api.hopto.org/color/key/f74017ae97c8da031d48922cb3f65524/ball/1/red/255/green/0/blue/0");
	echo PHP_EOL;
	curl_exec($curl);
	curl_close($curl);
}

