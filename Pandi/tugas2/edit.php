<?php

include_once("config.php");


if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];

    
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile',alamat='$alamat' WHERE id=$id");

    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
    $alamat = $user_data['alamat'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
     <link rel="stylesheet" type="text/css" href="hiasan.css">
    <style type="text/css">
        a {
            text-align: left;
            colo: red;
        }
    </style>
</head>

<body>
     <nav id="menu">
     <ul>
        <div id="heading">
            <a href="#">Biodata Mahasiswa Ilmu Komputer</a></li>
        </div>
        <li><a href="index.php">Home </a></li>
        <li><a href="add.php">Add User</a></li>
        <li><a href="#">profile</a>
            <ul>
                <li> <a href="https://www.instagram.com/comp.science18/?hl=id">Instagram</a></li>
                <li> <a href="https://www.instagram.com/p/B2tu19cnpBa/?utm_source=ig_web_copy_link">Photo</a></li>
            </ul>
        </li>
         </ul>
</nav>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
     <div class="footer">Copyright&copy;2020 Pandi Arianza</div>
    
</body>
</html>