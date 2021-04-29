<html>
 <head>
  <title>Input Data Siswa</title>
  <link rel = "stylesheet" type = "text/css" href = "http://localhost/tugas_ajis/assets/css/user/form_input.css"> 
  
 </head>
<body>
    <div>
        <form action="<?php echo base_url(); ?>crud/proses_input" method="POST">
            <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" /></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" /></td>
            </tr>

            <tr>
                <td>UserName</td>
                <td><input type="text" name="username" /></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="text" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="input" value="Tambah"/>    
                </td>
            </tr>
            </table>
        </form>
    </div>
</body>
<html>