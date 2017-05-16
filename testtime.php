<?php
function microtime_float(){
	list($usec,$sec)=explode(" ",microtime());
	return ((float)$usec+(float)$sec);
}
$time_start=microtime_float();
usleep(1000000);//1 second
$time_end=microtime_float();
$time=$time_end-$time_start;
echo "Did nothing in $time seconds\n";

