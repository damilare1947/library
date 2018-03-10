<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <title>Edit Equipment Master Data</title>
        <meta name="keywords" content="itinerary, list" />
        <meta name="description" content="This page provides a list of all itineraries" />
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>



         <?php
  $link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());


switch ($_GET['action']) {
    case "edit":
      $updatesql = "SELECT * FROM member
                   WHERE matric = '" . $_GET['id'] . "'";
      $result = mysql_query($updatesql)
        or die("Invalid query: " . mysql_error());
      $row = mysql_fetch_array($result);
      $matric = $row['matric'];
$fname = $row['fname'];
$lname = $row['lname'];
$sex=$row['sex'];
$dob=$row['dob'];
$address=$row['address'];
$homephone=$row['homephone'];
$mobilephone=$row['mobilephone'];
$nationality=$row['nationality'];
$singstatus=$row['singstatus'];
$mem_remark=$row['mem_remark'];
$username=$row['username'];
$password=$row['password'];
$security1=$row['security1'];
$security2=$row['security2'];
$security3=$row['security3'];

break;

    default:
      $matric =  "";
$fname =  "";
$lname = "";
$sex= "";
$dob="";
$address= "";
$homephone= "";
$mobilephone= "";
$nationality= "";
$singstatus= "";
$mem_remark= "";
$username="";
$password="";
$security1="";
$security2="";
$security3="";
  break;
  }
?>

    <body>
        <div id="wrapper">
             <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header2.php';?>
            <div id="page">
                <div id="content">
<h2 >Edit Member Master Data </h2>
<form action="memberlist_update_comit.php?action=<?php
             echo $_GET['action']; ?>&type=member&id=<?php
  echo $_GET['id']; ?>" method="post">


<form action="memberlist_update_comit.php?action=add&type=member" method="post">
  <div id="UILabel">MATRIC Number</div>
  <input class="form_tfield" type="text" name="matric" value="<?php echo $matric; ?>" /><br><br>
        <div id="UILabel">First Name</div>
  <input class="form_tfield" type="text" name="fname" value="<?php echo $fname; ?>" /><br><br>
  <div id="UILabel">Last Name</div>
  <input class="form_tfield" type="text" name="lname" value="<?php echo $lname; ?>" /><br><br>
   <div id="UILabel">Sex</div>
 <select name="sex" >
      <option value="<?php echo $sex; ?>" selected>
                 <?php echo $sex ;?></option>
                     <option value="M">Male</option>
                     <option value="F">Female</option>
                     </select>
<br><br>
  <div id="UILabel">Date of Birth [ yyyy-mm-dd ]</div>
  <input class="form_tfield" type="text" name="dob" value="<?php echo $dob; ?>" /><br><br>
  <div id="UILabel" >Address</div>

  <TEXTAREA  NAME="address" COLS=30 ROWS=3><?php echo $address; ?></TEXTAREA><br><br>
  <div id="UILabel">Home Phone</div>
  <input class="form_tfield" type="text" name="homephone" value="<?php echo $homephone; ?>" /><br><br>
  <div id="UILabel">Mobile Phone</div>
  <input class="form_tfield" type="text" name="mobilephone" value="<?php echo $mobilephone; ?>" /><br><br>
 <div id="UILabel">Nationality</div>
  <select name="nationality" >
      <option value="<?php echo $nationality; ?>" selected>
                 <?php echo $nationality ;?></option>
                     <option value="Nigerian">Nigeria</option>
                     <option value="Ghanian">Ghana</option>
                     <option value="SouthAfrican">SouthAfrica</option>
                     <option value="Others">Others</option>
                     </select><br><br>

   <div id="UILabel">Residence Status in Singapore</div>
   <select name="singstatus" >
      <option value="<?php echo $singstatus; ?>" selected>
                 <?php echo $singstatus ;?></option>
                     <option value="Nigerian Citizen">Nigeria Citizen</option>
                     <option value="Nigeria Temporary Resident">Nigeria Temporary Resident</option>
                     <option value="Others">Others</option>
                     </select><br><br>
                     <div id="UILabel" >Comment</div>
  <TEXTAREA NAME="mem_remark" COLS=30 ROWS=3><?php echo $mem_remark; ?></TEXTAREA>
  <br></br>
  <div id="UILabel">Username</div>
  <input class="form_tfield" type="text" name="username" value="<?php echo $username; ?>"/><br><br>
  <div id="UILabel">password</div>
  <input class="form_tfield" type="password" name="password" value="<?php echo $password; ?>"/><br><br>
  <div id="UILabel">What is your Mother maidens name</div>
  <input class="form_tfield" type="text" name="security1" placeholder="Securit Answer 1" value="<?php echo $security1; ?>"/><br><br>
  <div id="UILabel">What is your favourite movie</div>
  <input class="form_tfield" type="text" name="security2"  placeholder="Security Answer 2" value="<?php echo $security2; ?>"/><br><br>
  <div id="UILabel">What is your favourite food</div>
  <input class="form_tfield" type="text" name="security3" placeholder="Security Answer 3" value="<?php echo $security3; ?>"/><br><br>

  <br></br>
<input type="submit" value="Update" />

</form>
   <!--body ends-->


                    <!-- end div#welcome -->

                </div>
                <!-- end div#content -->
                <div id="sidebar">
                    <ul>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/nav_library.php';?>
                        <!-- end navigation -->
<?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/updates.php';?>
                        <!-- end updates -->
                    </ul>
                </div>
                <!-- end div#sidebar -->
                <div style="clear: both; height: 1px"></div>
            </div>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/footer.php';?>
        </div>
        <!-- end div#wrapper -->


    </body>
</html>