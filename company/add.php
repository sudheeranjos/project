<!DOCTYPE html> 
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Add User</title>
	</head>
	<body>
		<b>Add User</b>
		<br/><br/>
		<?php
			echo form_open('user/add');
			echo "<table>";
			echo "<tr>";
			echo "<td>".form_label('Name : ')."</td>";
			echo "<td>".form_input(array('id'=>'name','name'=>'name'))."</td>";
			echo "</tr>";
			echo "<tr><td colspan='2'><br/></td></tr>";
			echo "<tr>";
			echo "<td>".form_label('IP Address : ');
			echo "<td>".form_input(array('id'=>'ip_address','name'=>'ip_address'));
			echo "</tr>";
			echo "<tr><td colspan='2'><br/></td></tr>";
			echo "<tr>";
			echo "<td>".form_label('MAC Address : ');
			echo "<td>".form_input(array('id'=>'mac_address','name'=>'mac_address'));
			echo "</tr>";
			echo "<tr><td colspan='2'><br/></td></tr>";
			echo "<tr><td colspan='2'>".form_submit(array('id'=>'submit','value'=>'Add'))." &nbsp; <a href='".base_url()."index.php/user/index'><input type='button' value='Cancel'></a></td></tr>";
			echo "</table>";
			echo form_close();
			echo '<font color="red">'.validation_errors().$error.'</font>';
		?>
	</body>
</html>
