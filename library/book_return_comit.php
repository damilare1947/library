<?php
// COMMIT ADD
  $link = mysql_connect("localhost", "root", "")
    or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link)
    or die ( mysql_error());
  switch ($_GET['action']) {
    case "edit":

          $sql = "UPDATE loan SET
                   loan_return_mem_name='" . $_POST['loan_return_mem_name'] . "',
                   loan_return_date='" . $_POST['loan_return_date'] . "',
                    loan_status = 'Returned'
                  WHERE loan_book_slno = '" . $_POST['loan_book_slno'] . "'";

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
$redirect = '/library/library/transaction.php';
?>
<SCRIPT LANGUAGE="JavaScript">
redirTime = "550";
redirURL = "<?php echo $redirect ?>";
function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
</script>
<BODY onLoad="redirTimer()">