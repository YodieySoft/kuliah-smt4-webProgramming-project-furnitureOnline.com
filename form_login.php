<?php
	include "koneksi.php";
?>
<table width="300" align="center">
   <form method="post" action="">
   <tr>
    <td>Username</td>
    <td>:</td>
    <td><input name="username" type="text" id="username" placeholder="Username" required="required"/>
    </td>
   </tr>
   <tr>
    <td>Password</td>
    <td>:</td>
    <td><input name="password" type="password" id="password" placeholder="Harus > 2 Karakter" pattern="[A-Za-z0-9]{3}" required="required"/></td>
   </tr>
   <tr>
   	<td>&nbsp;</td>
   </tr>
   <tr>
    <td colspan="3" align="center"><input class=button-tag type="submit" name="proses" value="Login"/></td>
   </tr>
  </form>
  </table>
<?php
if(isset($_POST['proses'])){

$username=$_POST['username'];
$password=$_POST['password'];
 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
	setcookie("username", $username);
echo "<script>window.location = 'index.php';</script>";
}
else if($count==0){
	echo "<script>alert('Username dan Password Salah !');</script>";
	
}
}
?>