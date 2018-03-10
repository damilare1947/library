<?php
define('server','localhost');
define('user','root');
define('password','');
$database="library";
$link=mysqli_connect(server,user,password) or die("connection error".mysqli_error());
mysqli_select_db($link,$database) or die ("connection to database error".mysqli_error());
$username="";
$password="";
if(empty($_POST['username']) && empty($_POST['password'])){
  print "username/password is empty";
}else
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from admin where username='$username' and password='$password'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_num_rows($result);
  if($row=mysqli_num_rows($result)>0){
    header("location:admin.php");
  }else{
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: admin_login.php");
                exit();
            }
      }

}
mysqli_close($link);

?>