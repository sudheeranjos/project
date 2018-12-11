<?php
	$n = 20;	
	for( $i = 1; $i <= $n; $i++ ){
		if( $i == 1 ){
			continue;		
		}
		for( $k = 0; $k <= ($n-$i); $k++ ){
			echo "&nbsp;";
		}
		for( $j = 1; $j <= $i; $j++ ){
			if( $j == 1 ){
				echo "/";
			}elseif( $j == $i ){
				echo "\\";
			}else{
				echo "&nbsp;&nbsp;";	
			}
		}
		echo "<br/>";
	}
	for( $i = $n; $i > 0; $i-- ){
		if( $i == 1 ){
			continue;		
		}
		for( $k = 0; $k <= ($n-$i); $k++ ){
			echo "&nbsp;";
		}
		for( $j = 1; $j <= $i; $j++ ){
			if( $j == 1 ){
				echo "\\";
			}elseif( $j == $i ){
				echo "/";
			}else{
				echo "&nbsp;&nbsp;";			
			}
		}
		echo "<br/>";
	}
?>
