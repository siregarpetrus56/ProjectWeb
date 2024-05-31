<?php

$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$passwordd = $_REQUEST['password'];

include ("database.php");

$tsql="INSERT INTO se_user VALUES('$username','$username','PT Berdikari1','$email','',MD5('$passwordd'),
       '','','','','','','','','','','','',NOW())";
$resulttsql=mysqli_query($kon, $tsql);
echo "echo <script> 
            alert('REGISTRASI BERHASIL');window.location.href='http://localhost/kedua/awal.php';
            </script>
        ";
exit;
?>
