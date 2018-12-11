<?php
	$rows = 5;
	$columns = 20;	
	for( $i = 1; $i <= $rows; $i++ ){		
		for( $j = 1; $j <= $columns; $j++ ){
			if( $i == 1 || $i == $rows ){
				echo "-";
			}elseif( $j == 1 || $j == $columns ){
				echo "|";
			}else{
				echo "&nbsp;";
			}					
		}
		echo "<br/>";
	}
?>
