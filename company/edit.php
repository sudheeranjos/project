<!DOCTYPE html> 
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Edit User</title>
	</head>
	<body>
		<b>Edit User</b>
		<br/><br/>
		<?php
			echo form_open('user/edit');
			echo form_hidden('id',$user[0]->id);
			echo "<table>";
			echo "<tr>";
			echo "<td>".form_label('Name : ')."</td>";
			echo "<td>".form_input(array('id'=>'name','name'=>'name','value'=>$user[0]->name))."</td>";
			echo "</tr>";
			echo "<tr><td colspan='2'><br/></td></tr>";
			echo "<tr>";
			echo "<td>".form_label('IP Address : ');
			echo "<td>".form_input(array('id'=>'ip_address','name'=>'ip_address','value'=>$user[0]->ip_address));
			echo "</tr>";
			echo "<tr><td colspan='2'><br/></td></tr>";
			echo "<tr>";
			echo "<td>".form_label('MAC Address : ');
			echo "<td>".form_input(array('id'=>'mac_address','name'=>'mac_address','value'=>$user[0]->mac_address));
			echo "</tr>";
			echo "<tr><td colspan='2'><br/></td></tr>";
			echo "<tr><td colspan='2'>".form_submit(array('id'=>'submit','value'=>'Edit'))." &nbsp; <a href='".base_url()."index.php/user/index'><input type='button' value='Cancel'></a></td></tr>";
			echo "</table>";
			echo form_close();
			echo '<br/><font color="red">'.validation_errors().$error.'</font>';
		?>
	</body>
</html>
