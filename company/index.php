<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Users Lists</title>
	</head>
	<body>
		<b>Users List</b>
		<br/><br/>
		<?php
			if( isset($users) && !empty($users) ){
				$i = 1;
				echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>";
				echo "<td>Sr. No.</td>";
				echo "<td>Name</td>";
				echo "<td>IP Address</td>";
				echo "<td>MAC Address</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<tr>";
				foreach( $users as $user ){
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$user->name."</td>";
					echo "<td>".$user->ip_address."</td>";
					echo "<td>".$user->mac_address."</td>";
					echo "<td> <a href='".base_url()."index.php/user/edit/".$user->id."'>Edit</a> </td>";
					echo "<td> <a href='".base_url()."index.php/user/delete/".$user->id."'>Delete</a> </td>";
					echo "<tr>";
					$i++;
				}
				echo "</table>";
			}else{
				echo "No data <br/>";
			}
		?>
		<br/>
		<a href="<?php echo base_url(); ?>index.php/user/add/"><input type="button" value="Add"></a>
	</body>
</html>
