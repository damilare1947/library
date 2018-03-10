<?php
// COMMIT ADD
  $link = mysql_connect("localhost", "root", "")
    or die("Could not connect: " . mysql_error());
  mysql_select_db('library', $link)
    or die ( mysql_error());
  switch ($_GET['action']) {
    case "add":
      switch ($_GET['type']) {
        case "member":
          $sql = "INSERT INTO member
                   (matric,
                    fname,
                    lname,
                    sex,
                    dob,
                    address,
                    homephone,
                    mobilephone,
                    nationality,
                    singstatus,
                    mem_remark,
                    username,
                    password,
                    security1,
                    security2,
                    security3
                    )
                  VALUES
                   ('" . $_POST['matric'] . "',
                    '" . $_POST['fname'] . "',
                    '" . $_POST['lname'] . "',
                    '" . $_POST['sex'] . "',
                    '" . $_POST['dob'] . "',
                    '" . $_POST['address'] . "',
                    '" . $_POST['homephone'] . "',
                    '" . $_POST['mobilephone'] . "',
                    '" . $_POST['nationality'] . "',
                    '" . $_POST['singstatus'] . "',
                    '" . $_POST['mem_remark'] . "',
                    '" . $_POST['username'] . "',
                    '" . $_POST['password'] . "',
                    '" . $_POST['security1'] . "',
                    '" . $_POST['security2'] . "',
                    '" . $_POST['security3'] . "')";
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
    Done. <a href="/library/index.php">Goto Home page </a>
  </p>
<?php
  }
?>
