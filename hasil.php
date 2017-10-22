<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	 <link rel="stylesheet" href="style.css">  
</head>
<body>
<div id="kotak">
<div class="logo"><img src="logo2.png"/></div>
<table align="center">
<hr width="100%">
<?php
$host= "localhost";
$user= "root";
$password= "";	
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$pswrd=$_POST['password'];
$pswrd = str_repeat("*", strlen("password"));
if($username)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'instagram');
$sql="insert into tbform values ('$email', '$fullname', '$username', '$pswrd')";
$hasil=mysqli_query ($conn,$sql);
}
else{
	echo "Gagal Disimpan";
}
echo "<tr><td>Email</td>
		  <td>:</td> 
		  <td>$email</td>
	  </tr>";
echo "<tr><td>Fullname</td>
          <td>:</td>
          <td>$fullname</td>
      </tr>";
echo "<tr><td>Username</td>
          <td>:</td>
          <td>$username</td>
      </tr>";
echo "<tr><td>Password</td>
		  <td>:</td>
		  <td>$password</td>
	  </tr>";
?>
</table>
</body>
</html>
