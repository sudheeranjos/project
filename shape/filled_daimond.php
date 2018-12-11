<?php
	$n = 20;	
	for( $i = 1; $i <= $n; $i++ ){
		for( $k = 0; $k <= ($n-$i); $k++ ){
			echo "&nbsp;";
		}
		for( $j = 1; $j <= $i; $j++ ){
			echo "*";
		}
		echo "<br/>";
	}
	echo str_repeat("*",$n+2);
	echo "<br/>";
	for( $i = $n; $i >= 1; $i-- ){
		for( $k = 0; $k <= ($n-$i); $k++ ){
			echo "&nbsp;";
		}
		for( $j = 1; $j <= $i; $j++ ){
			echo "*";
		}
		echo "<br/>";
	}
?>
