
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
                        
                        <h2>Security Question Answer</h2>
                              <p>please provide answer to the security question. Please note that the amount of tries is limited.


           <?php
  $link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());

  
?>

<form action="security_comit.php" method="post">
  <div id="UILabel">What is your mother maiden name?</div>Answer:<br/>
  <input class="form_tfield" type="text" name="security1" value="" /><br><br>
        <div id="UILabel">what is your favorite movie?</div> Answer:<br>
  <input class="form_tfield" type="text" name="security2" value="" /><br><br>
   
  
  
<input type="submit" value="Submit" />
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


