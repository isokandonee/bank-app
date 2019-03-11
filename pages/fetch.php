<?php
$conn = mysqli_connect('localhost','root','','mitchel');
$fetch = mysqli_query($conn,"SELECT * from user_registration");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>My Users</h1>
    <table>
    <thead>
    <th>S/N</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Password</th>
    <th>Email</th>
    <th>Username</th>
    </thead>
    
    <?php
    while($r = mysqli_fetch_array($fetch)){
        echo "
        <tr>
        <td>".$r['id']."</td>
        <td>".$r['name']."</td>
        <td>".$r['phone']."</td>
        <td>".$r['password']."</td>
        <td>".$r['email']."</td>
        <td>".$r['username']."</td>
        </tr> ";
    }
    ?>
    </table>
</body>
</html>