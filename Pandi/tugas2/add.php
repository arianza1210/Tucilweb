<html>
<head>
    <title>Add Users</title>
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

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Address</td>
                 <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $alamat = $_POST['alamat'];

        
        include_once("config.php");

        
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile,alamat) VALUES('$name','$email','$mobile','$alamat')");

       
        
        echo "<br><font color='white'>User added successfully ,Go to Home.</font>";
    }
    ?>
     <div class="footer">Copyright &copy;2020 Pandi Arianza</div>
   
</body>
</html>