<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=Unicode UTF-8" />
        <title>Edit Category Name</title>
        <meta name="keywords" content="itinerary, list" />
        <meta name="description" content="This page provides a list of all itineraries" />
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>
         <?php
  $link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link) or die ( mysql_error());


switch ($_GET['action']) {
    case "edit":
      $updatesql = "SELECT * FROM location
                   WHERE loc_name = '" . $_GET['id'] . "'";
      $result = mysql_query($updatesql)
        or die("Invalid query: " . mysql_error());
      $row = mysql_fetch_array($result);
      $loc_id = $row['loc_id'];
$loc_name = $row['loc_name'];
break;

    default:
      $loc_id =  "";
$loc_name =  "";
 break;
  }
?>

    <body>
        <div id="wrapper">
             <?php include $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header2.php';?>
            <div id="page">
                <div id="content">
<h2 >Edit Location Name </h2>

<form action="loc_update_comit.php?action=<?php
             echo $_GET['action']; ?>&type=cat&id=<?php
  echo $_GET['id']; ?>" method="post">

  <div id="UILabel">Location Name</div>
  <input class="form_tfield" type="text" name="loc_name" value="<?php echo $loc_name; ?>" /><br><br>
       
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
