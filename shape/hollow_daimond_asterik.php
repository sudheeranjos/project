<?php
	$n = 20;	
	for( $i = 1; $i <= $n; $i++ ){
		for( $k = 0; $k <= ($n-$i); $k++ ){
			echo "&nbsp;";
		}
		for( $j = 1; $j <= $i; $j++ ){
			if( $j == 1 || $j == $i ){
				echo "*";
			}else{
				echo "&nbsp;&nbsp;";	
			}
		}
		echo "<br/>";
	}
	for( $i = 1; $i <= $n; $i++ ){
		if( $i == 1 || $i == $n ){
			echo "*";
		}else{
			echo "&nbsp;&nbsp;";
			if( $i == $n-1 ){
				echo "&nbsp;&nbsp;";	
			}
		}
	}
	echo "<br/>";
	for( $i = $n; $i > 0; $i-- ){
		for( $k = 0; $k <= ($n-$i); $k++ ){
			echo "&nbsp;";
		}
		for( $j = 1; $j <= $i; $j++ ){
			if( $j == 1 || $j == $i ){
				echo "*";
			}else{
				echo "&nbsp;&nbsp;";			
			}
		}
		echo "<br/>";
	}
?>
