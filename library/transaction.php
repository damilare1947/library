
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>NIMBE ADEDIPE LIBRARY SYSTEM</title>
        <link href="/library/css/default.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <div id="wrapper">
     <?php  include $_SERVER ['DOCUMENT_ROOT'].'/library/includes/header1.php';?>
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h2>NIMBE ADEDIPE LIBRARY SYSTEM</h2>
                        <!--body-->
                    <p>

                         Welcome to NIMBE ADEDIPE LIBRARY MANAGEMENT SYSTEM.
                            Here you will find the complete collection of
                            book on our library.
                            Please contact our staff if you want to borrow any
                            books.</p>
                        <p>
                            PLEASE REGISTER UNDER THE ADMIN SECTION IF YOU ARE A NEW USER
                        </p>




                        <!--body ends-->
                    </div>

                    <!-- end div#welcome -->

                </div>
                <!-- end div#content -->
                <div id="sidebar">
                    <ul>
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/library/includes/nav_trans.php';?>
                        <!-- end navigation -->
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/library/includes/updates.php';?>
                        <!-- end updates -->
                    </ul>
                </div>
                <!-- end div#sidebar -->
                <div style="clear: both; height: 1px"></div>
            </div>
 <?php include $_SERVER['DOCUMENT_ROOT'].'/library/includes/footer.php';?>
        </div>
        <!-- end div#wrapper -->
    </body>
</html>


