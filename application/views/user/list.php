<!DOCTYPE html>
<html lang="en">
<head>
        <title>List Data </title>
        <link rel = "stylesheet" type = "text/css" href = "http://localhost/tugas_ajis/assets/css/user/index.css"> 
</head>
<body>
    <h1>List Data User</h1>
        <table border="1" id="customers">
            <tr>
                <th>Nama</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <tr>
            <?php foreach($user as $u){ ?>
            <tr>
                <td><?php echo $u->name ?></td>
                <td><?php echo $u->username ?></td>
                <td><?php echo $u->email ?></td>
                <td>
                    <span>
                        <a class="btn btn-primary" href="<?php echo base_url('crud/edit/'.$u->id) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('curd/delete/'.$u->id) ?>">Delete</a>
                    </span>
                </td>
            </tr>
		<?php } ?>
		</tr>
        </table>
</body>
</html>