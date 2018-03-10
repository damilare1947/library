<?php
define('server','localhost');
define('user','root');
define('password','');
$database="library";
$link=mysqli_connect(server,user,password);
mysqli_select_db($link, 'library') or die ("connection to database error:".mysqli_error());
$username="";
$password="";
if(empty($_POST['username'])&& empty($_POST['password'])){
    print "username/password is empty";
}else
{

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from member where username='$username' and password='$password'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_num_rows($result);
    if($row=mysqli_num_rows($result) >0){
        header("location:security.php");
    }else{
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: login.php");
                exit();
            }
        
    }


}
mysqli_close($link);
?>