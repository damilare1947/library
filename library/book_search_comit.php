<?php
$link=mysql_connect('localhost','root','') or die (mysql_error());
mysql_select_db("library") or die (mysql_error());

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=unicode UTF-8" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>

        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="wrapper">
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header1.php'; ?>
                <div id="page">
                <div id="content">
                    <div id="welcome">

 <h2 class="head2" ><a class="head">View / Edit Book Master Data</a></h2>

 <table class="aatable">
<tr>
<th >SL No</th>
<th>Title</th>
<th>Media Type</th>
<th >Author</th>
<th >Publication</th>
<th >Edition</th>
<th >Year</th>
<th >No of Copy Avail</th>
<th >Location</th>
<th >Category</th>
<th >Sub Category</th>
<th >Remark</th>
</tr>
<?php

if ($_POST[search_type]=='all'){
$query = "SELECT * FROM book WHERE
slno LIKE '%$_POST[keyword]%'||
title LIKE '%$_POST[keyword]%' ||
author LIKE '%$_POST[keyword]%'||
publication LIKE '%$_POST[keyword]%'||
year LIKE '%$_POST[keyword]%'||
location LIKE '%$_POST[keyword]%'||
category LIKE '%$_POST[keyword]%'||
sub_category LIKE '%$_POST[keyword]%'||
related_name LIKE '%$_POST[keyword]%'||
media_type  LIKE '%$_POST[keyword]%'||
book_remark LIKE '%$_POST[keyword]%'
    ";
$result = mysql_query($query,$link)
or die(mysql_error());
}

else {
$query = "SELECT * FROM book WHERE $_POST[search_type] LIKE '%$_POST[keyword]%'";
$result = mysql_query($query,$link)
or die(mysql_error());
}
  

while ($row = mysql_fetch_array($result)) {

$book_id = $row['book_id'];
$slno = $row['slno'];
$title = $row['title'];
$media_type = $row['media_type'];
$author=$row['author'];
$publication=$row['publication'];
$edition=$row['edition'];
$year=$row['year'];
$total_holding=$row['total_holding'];
$location=$row['location'];
$category=$row['category'];
$sub_category=$row['sub_category'];
$book_remark=$row['book_remark'];

echo "<tr>";
echo "<td>".$slno."</td>";
echo "<td >".$title."</td>";
echo "<td>".$media_type."</td>";
echo "<td>".$author."</td>";
echo "<td>".$publication."</td>";
echo "<td >".$edition."</td>";
echo "<td>".$year."</td>";
echo "<td >".$total_holding."</td>";
echo "<td>".$location."</td>";
echo "<td>".$category."</td>";
echo "<td>".$sub_category."</td>";

echo "<td>".$book_remark."</td>";

echo "</tr>";
}
?>
 </table>
                          <!--body ends-->
 </div>
                    <!-- end div#welcome -->

                </div>
                <!-- end div#content -->

                <!-- end div#sidebar -->
                <div style="clear: both; height: 1px"></div>
            </div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/library/includes/footer.php'; ?>
        </div>
        <!-- end div#wrapper -->
    </body>
</html>
