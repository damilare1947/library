<?php
// COMMIT ADD
  $link = mysql_connect("localhost", "root", "")
    or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link)
    or die ( mysql_error());
  switch ($_GET['action']) {
    case "edit":
      switch ($_GET['type']) {
        case "member":
          $sql = "UPDATE member SET
                   matric='" . $_POST['matric'] . "',
                    fname='" . $_POST['fname'] . "',
                    lname='" . $_POST['lname'] . "',
                    sex='" . $_POST['sex'] . "',
                    address='" . $_POST['address'] . "',
                    dob='" . $_POST['dob'] . "',
                    homephone='" . $_POST['homephone'] . "',
                    mobilephone= '" . $_POST['mobilephone'] . "',
                    nationality='" . $_POST['nationality'] . "',
                    singstatus='" . $_POST['singstatus'] . "',
                    mem_remark = '" . $_POST['mem_remark'] . "',
                    username = '" . $_POST['username'] . "',
                     password = '" . $_POST['password'] . "',
                      security1 = '" . $_POST['security1'] . "',
                      security2 = '" . $_POST['security2'] . "',
                    security3 = '" . $_POST['security3'] . "'
                  WHERE matric = '" . $_GET['id'] . "'";

          break;
      }
      break;
  }

  if (isset($sql) && !empty($sql)) {
    echo "<!--" . $sql . "-->";
    $result = mysql_query($sql)
      or die("Invalid query: " . mysql_error());
?>
  <p align="center" style="color:#FF0000">
   Done. You will be redirected in few seconds.

  </p>
<?php
  }
?>
<?php
$redirect = '/library/library/memberlist.php';
?>
<SCRIPT LANGUAGE="JavaScript">
redirTime = "550";
redirURL = "<?php echo $redirect ?>";
function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
</script>
<BODY onLoad="redirTimer()">