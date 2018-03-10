<?php
define('server','localhost');
define('user','root');
define('password','');
$database="library";
$link=mysqli_connect(server,user,password);
mysqli_select_db($link, 'library') or die ("connection to database error:".mysqli_error());
$security1="";
$security2="";

if(empty($_POST['security1']) && empty($_POST['security2']) ){
    print "please fill in the empty spaces";
}else
{

    $security1=$_POST['security1'];
    $security2=$_POST['security2'];
    

    $sql="select * from member where security1='$security1' and security2='$security2'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_num_rows($result);
    if($row=mysqli_num_rows($result) >0){
        header("location:transaction.php");
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