
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <div id="wrapper">
     <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header.php';?>
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h2>Enter your Login Details</h2>


           <?php
  $link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());

  
?>

<form action="login_comit.php" method="post">
  <div id="UILabel">Username</div>
  <input class="form_tfield" type="text" name="username" value="" /><br><br>
        <div id="UILabel">Password</div>
  <input class="form_tfield" type="password" name="password" value="" /><br><br>
  
<input type="submit" value="Login" />
<input  type="reset" value="Clear Form" />
</form>


                        <!--body ends-->
                    </div>

                    <!-- end div#welcome -->

                </div>
                <!-- end div#content -->
                <!-- end div#sidebar -->
                <div style="clear: both; height: 1px"></div>
            </div>
 <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/footer.php';?>
        </div>
        <!-- end div#wrapper -->
    </body>
</html>


