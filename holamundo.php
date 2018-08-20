<?php

function fib($a){
	if ($a == 1){
		return 1;
	}
	else{
		return $a*fib($a-1);
	}
}

echo "hola ".fib(5);

?>