         <?php
  $link = mysql_connect("localhost", "root", "")or
  die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());
?>
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=unicode utf-8" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <div id="wrapper">
     <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header2.php';?>
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h2>Add New Book Master Data</h2>


           <?php
  $link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());

  
?>

<form action="book_comit.php?action=add&type=book" method="post">
  <div id="UILabel">Serial Number</div>
  <input class="form_tfield" type="text" name="slno" value="" /><br><br>
        <div id="UILabel">Title</div>
  <input class="form_tfield" type="text" name="title" value="" /><br><br>
   <div id="UILabel">Media Type</div>
  <select name="media_type" >
                     <option value="" selected>Select a media type...</option>
                     <option value="Book">Book</option>
                     <option value="Text Book">Text Book</option>
                     <option value="CD">CD</option>
                     <option value="Magazine">Magazine</option>
                     <option value="eBook">eBook</option>
                     </select><br><br>
 <?php $author_sql="select * from author";
$result=mysql_query($author_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $auth_name[$row['auth_id']]=$row['auth_name'];
}
      ?>

  <div id="UILabel">Author Name</div>

              <select name="author" style="width:150px">
                <option value="" selected >Select a author name...</option>

<?php
  foreach ($auth_name as $auth_id => $auth_name) {
?>
        <option value="<?php echo $auth_name; ?>" ><?php
        echo $auth_name; ?></option>
<?php
  }
?>
      </select><br><br>

  <div id="UILabel">Publication</div>
  <input class="form_tfield" type="text" name="publication" value="" /><br><br>
  <div id="UILabel">Edition [ Ex: 5th edition ]</div>
  <input class="form_tfield" type="text" name="edition" value="" /><br><br>
  <div id="UILabel">Year of Publication</div>
  <input class="form_tfield" type="text" name="year" value="" /><br><br>
  <div id="UILabel">Total No. of Page</div>
  <input class="form_tfield" type="text" name="pages" value="" /><br><br>
  <div id="UILabel">No of Books Available</div>
  <input class="form_tfield" type="text" name="total_holding" value="" /><br><br>
 <?php $cat_sql="select * from location";
$result=mysql_query($cat_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $loc_name[$row['loc_id']]=$row['loc_name'];
}
      ?>

  <div id="UILabel">Location</div>
              <select name="location" style="width:150px">
                <option value="" selected >Select a location...</option>

<?php
  foreach ($loc_name as $loc_id => $loc_name) {
?>
        <option value="<?php echo $loc_name; ?>" ><?php
        echo $loc_name; ?></option>
<?php
  }
?>
      </select><br><br>


  


<?php $cat_sql="select * from category";
$result=mysql_query($cat_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $cat_name[$row['cat_id']]=$row['cat_name'];
}
      ?>

  <div id="UILabel">Category</div>
              <select name="category" style="width:150px">
                <option value="" selected >Select a category...</option>

<?php
  foreach ($cat_name as $cat_id => $cat_name) {
?>
        <option value="<?php echo $cat_name; ?>" ><?php
        echo $cat_name; ?></option>
<?php
  }
?>
      </select><br><br>
  <div id="UILabel">Sub Category</div>
              <select name="sub_category" style="width:150px">
                <option value="" selected >Select a category...</option>
<?php $sub_cat_sql="select * from category";
$result=mysql_query($sub_cat_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $sub_cat_name[$row['cat_id']]=$row['cat_name'];
}
  foreach ($sub_cat_name as $cat_id => $cat_name) {
?>
        <option value="<?php echo $cat_name; ?>" ><?php
        echo $cat_name; ?></option>
<?php
  }
?>
      </select><br><br>
    <div id="UILabel">Related Name</div>
  <input class="form_tfield" type="text" name="related_name" value="" /><br><br>


                     <div id="UILabel" >Comment</div>
  <TEXTAREA NAME="book_remark" COLS=30 ROWS=3></TEXTAREA>
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


