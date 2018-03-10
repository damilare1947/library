<?php
$link=mysql_connect('localhost','root','') or die (mysql_error());
mysql_select_db("library") or die (mysql_error());
$query = "SELECT * FROM member order by fname, lname";
$result = mysql_query($query,$link)
or die(mysql_error());
$num_supp_name = mysql_num_rows($result);?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>

        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="wrapper">
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/library/includes/header2.php'; ?>
                <div id="page">
                <div id="content">
                    <div id="welcome">

 <h2 class="head2" ><a class="head">View / Edit Equipment Master Data</a></h2>

 <table class="aatable">
<tr>
<th >MATRIC</th>
<th>First Name</th>
<th>Last Name</th>
<th >Sex</th>
<th >Address</th>
<th >Home Phone</th>
<th >Mobile Phone</th>
<th >Nationality</th>
<th >Status in Nigeria</th>
<th >Remark</th>
</tr>
<?php

while ($row = mysql_fetch_array($result)) {

$matric = $row['matric'];
$fname = $row['fname'];
$lname = $row['lname'];
$sex=$row['sex'];
$address=$row['address'];
$homephone=$row['homephone'];
$mobilephone=$row['mobilephone'];
$nationality=$row['nationality'];
$singstatus=$row['singstatus'];
$mem_remark=$row['mem_remark'];

echo "<tr>";
echo "<td>".$matric."</td>";
echo "<td >".$fname."</td>";
echo "<td>".$lname."</td>";
echo "<td>".$sex."</td>";
echo "<td>".$address."</td>";
echo "<td >".$homephone."</td>";
echo "<td>".$mobilephone."</td>";
echo "<td>".$nationality."</td>";

echo "<td>".$singstatus."</td>";
echo "<td>".$mem_remark."</td>";

?>
<td><a href="member_update.php?action=edit&id=<?php echo $row['matric']; ?>">[EDIT]</a> </td>
<?php
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
