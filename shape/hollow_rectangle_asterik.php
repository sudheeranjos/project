<?php
	$rows = 5;
	$columns = 20;	
	for( $i = 1; $i <= $rows; $i++ ){		
		for( $j = 1; $j <= $columns; $j++ ){
			if( $i == 1 || $j == 1 || $i == $rows || $j == $columns ){
				echo "*";
			}else{
				echo "&nbsp;&nbsp;";
			}
		}
		echo "<br/>";
	}
?>
