<?php

$usernamee = $_REQUEST['username'];
$passworddd = $_REQUEST['password'];


include ("database.php");

$query = "select COUNT(*), user_name, user_company from se_user WHERE user_id='$usernamee' AND user_pwd=MD5('$passworddd')";
$result=mysqli_query($kon, $query);
$row = mysqli_fetch_row($result);
$adadata = $row[0];
$namauser = $row[1];
$namatoko = $row[2];
if ($adadata <= 0)
{
    echo "User Name <b>$usernamee</b> Tidak Ditemukan";
	exit;
}
else
{
   header("Location:coba.php");
}
?>