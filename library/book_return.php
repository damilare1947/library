         <?php
  $link = mysql_connect("localhost", "root", "")or
  die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());
  
?>
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <div id="wrapper">
     <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header1.php';?>
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h2>Book Return</h2>

<form action="book_return_comit.php?action=edit&type=book" method="post">
    <div id="UILabel">Book Serial Number</div>

              <select name="loan_book_slno" >
                <option value="" selected >Select a serial number...</option>
 <?php $book_sql="SELECT  * from loan where loan_status='On Loan' ";
$result=mysql_query($book_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $slno[$row['loan_id']]=$row['loan_book_slno'];
}

  foreach ($slno as $loan_id => $loan_book_slno) {
?>
        <option value="<?php echo $loan_book_slno; ?>" ><?php
        echo $loan_book_slno; ?></option>
<?php
  }
?>
      </select><br><br><br>
    <div id="UILabel">Member ID</div>

              <select name="loan_return_mem_name" >
                <option value="" selected >Select a member ID...</option>
 <?php $mem_sql="select * from member ";
$result=mysql_query($mem_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $mem_name[$row['reader_id']]=$row['matric'];
}

  foreach ($mem_name as $reader_id => $matric) {
?>
        <option value="<?php echo $matric; ?>" ><?php
        echo $matric; ?></option>
<?php
  }
?>
      </select><br><br><br>


  <div id="UILabel">Return Date [ yyyy-mm-dd ]</div>
<input class="form_tfield" type="text" name="loan_return_date" value="<?php echo date('Y-m-d')?>" /><br><br>


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
                        <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/nav_trans.php';?>
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


