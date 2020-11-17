<?php

include_once("config.php");
    if(isset($_POST["cari"])){
    $keyword = $_POST["cari"];
    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE 
        name LIKE '%$keyword%' OR
        mobile LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        alamat LIKE '%$keyword%'    
    ");
} else {
    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
}
?>

<html>
<head>    
    <title>Homepage</title>
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
        <li><form action="index.php" method="post">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form></li>

         </ul>
</nav>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>No HP</th> <th>Email</th><th>Address</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    <div class="footer">Copyright &copy;2020 Pandi Arianza</div>
   
    </table>
</body>
</html>