<?php

$arr = [41,22,46,0,-2,-3,41,0,-17,-1];


for($k = 0; $k< count($arr);$k++) {
	$cur = $arr[$k];
	for($o = $k+1;$o< count($arr);$o++) {
		$next = $arr[$o];
		if ($cur == $next) {
			echo $cur;
			echo "<br/>";
			echo $next;
			echo "<br/>";
		};
	}
}

?>