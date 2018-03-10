
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <div id="wrapper">
     <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header2.php';?>
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h2>Add New Member</h2>


           <?php
  $link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());

  
?>

<form action="member_comit.php?action=add&type=member" method="post">
  <div id="UILabel">MATRIC Number</div>
  <input class="form_tfield" type="text" name="matric" value="" /><br><br>
        <div id="UILabel">First Name</div>
  <input class="form_tfield" type="text" name="fname" value="" /><br><br>
  <div id="UILabel">Last Name</div>
  <input class="form_tfield" type="text" name="lname" value="" /><br><br>
   <div id="UILabel">Sex</div>
 <select name="sex" >
                     <option value="" selected>Select a sex.s..</option>
                     <option value="M">Male</option>
                     <option value="F">Female</option>
                     </select>
<br><br>
  <div id="UILabel">Date of Birth [ yyyy-mm-dd ]</div>
  <input class="form_tfield" type="text" name="dob" value="" /><br><br>
  <div id="UILabel" >Address</div>

  <TEXTAREA  NAME="address" COLS=30 ROWS=3></TEXTAREA><br><br>
  <div id="UILabel">Home Phone</div>
  <input class="form_tfield" type="text" name="homephone" value="" /><br><br>
  <div id="UILabel">Mobile Phone</div>
  <input class="form_tfield" type="text" name="mobilephone" value="" /><br><br>
 <div id="UILabel">Nationality</div>
  <select name="nationality" >
                     <option value="" selected>Select a nationality...</option>
                     <option value="nigerian">Nigeria</option>
                     <option value="ghanian">Ghana</option>
                     <option value="burkinafaso">SouthAfrica</option>
                     <option value="Others">Others</option>
                     </select><br><br>

   <div id="UILabel">Residence Status in Nigeria</div>
   <select name="singstatus" >
                     <option value="" selected>Select a residence status...</option>
                     <option value="Nigerian Citizen">Nigeria Citizen</option>
                     <option value="Nigeria Temporary Resident">Nigeria Temporary Resident</option>
                     <option value="Others">Others</option>
                     </select><br><br>
                     <div id="UILabel" >Comment</div>
  <TEXTAREA NAME="mem_remark" COLS=30 ROWS=3></TEXTAREA>
  <div id="UILabel">Username</div>
  <input class="form_tfield" type="text" name="username" value=""/><br><br>
  <div id="UILabel">password</div>
  <input class="form_tfield" type="password" name="password" value=""/><br><br>
  
  <div id="UILabel">What is your Mother maidens name</div>
  <input class="form_tfield" type="text" name="security1" placeholder="Securit Answer 1" value=""/><br><br>
  <div id="UILabel">What is your favourite movie</div>
  <input class="form_tfield" type="text" name="security2"  placeholder="Security Answer 2" value=""/><br><br>
  <div id="UILabel">What is your favourite food</div>
  <input class="form_tfield" type="text" name="security3" placeholder="Security Answer 3" value=""/><br><br>
<br></br>

<input type="submit" value="Submit" />
<input  type="reset" value="Clear Form" />
</form>


                        <!--body ends-->
                    </div>

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


