<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Update User</title>
	<link rel = "stylesheet" type = "text/css" href = "http://localhost/tugas_ajis/assets/css/user/form_input.css"> 
</head>
<body>
    <center>
        <h1>Update User Data</h1>
    </center>

    <?php foreach($user as $u){?>
       <div>	
	   <form action="<?php echo base_url(); ?>crud/update" method="POST">
            <table>
				<tr>
					<td>Name</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $u->id ?>">
						<input type="text" name="name" value="<?php echo $u->name ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Save"></td>
				</tr>
			</table>
        </form>
	   </div>
    <?php }?>
</body>
</html>