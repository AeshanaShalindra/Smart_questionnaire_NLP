<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>
        <script src="js/xepOnline.jqPlugin.js"></script>
        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            tr.spaceUnder>td {
                padding-bottom: 10em;
            }
        </style>
    </head>
    <body>

        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Smart CV Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'xyz') or die(mysqli_error());
                            $sql = mysqli_query($con, "SELECT DISTINCT sname FROM answers")
                                    or die(mysql_error());


                            while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                <li>
                                    <a href="manage_users.php?sname=<?php echo $row["sname"]; ?>"><i class="fa fa-wrench fa-fw"></i> <?php echo $row["sname"]; ?><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="manage_users.php?sname=<?php echo $row["sname"]; ?>">All</a>
                                        </li>
                                        <li>
                                            <a href="manage_users_category.php?sname=<?php echo $row["sname"]; ?>&qtype=Academic Qualifications">Academic Qualifications</a>
                                        </li>
                                        <li>
                                            <a href="manage_users_category.php?sname=<?php echo $row["sname"]; ?>&qtype=Professional Qualifications">Professional Qualifications</a>
                                        </li>
                                        <li>
                                            <a href="manage_users_category.php?sname=<?php echo $row["sname"]; ?>&qtype=Work Experience">Work Experience</a>
                                        </li>
                                        <li>
                                            <a href="manage_users_category.php?sname=<?php echo $row["sname"]; ?>&qtype=Extra Activities">Extra Activities</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
<?php } ?>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper" >
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

                <script type="text/javascript">
                    $("#btnPrint").live("click", function () {
						var userid = <?php echo ($_GET["uid"]); ?>;
                        var divContents = $("#dvContainer").html();
                        var printWindow = window.open('', '', 'height=600,width=900');
                        printWindow.document.write('<html><head><title>Answer of user id ' + userid + '</title>');
                        printWindow.document.write('</head><body ></br></br>');
                        printWindow.document.write(divContents);
                        printWindow.document.write('</body></html>');
                        printWindow.document.close();
                        printWindow.print();
                    });
                </script>
                </br>
				<h3 class="text-center"> Answers of user id <?php  echo ($_GET["uid"]); ?>  and Survey id <?php  echo ($_GET["id"]); ?> </h3><br>
                <!-- /.row -->
                <div class="row" id="dvContainer">
                    <div class="col-lg-12 col-md-12" style="margin-top:-130px" >
                        </br></br></br></br></br></br>
                        <?php
                        $sql = mysqli_query($con, "SELECT *  FROM answers WHERE user='" . $_GET["uid"] . "' and sname ='" . $_GET["id"] . "'")
                                or die(mysql_error());
                        $i = 1;
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h5><?php echo '(' . $i . ') ' . $row["question"]; ?></h5></div>
                                <div class="panel-body">
                            <?php echo $row["ans"]; ?>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                        <!-- /.row -->
                        <input type="button" value="Download or Print" class="btn btn-primary" id="btnPrint" />
                        <!-- /.row -->
                    </div>
                    <!-- /#page-wrapper -->
                </div>
                <!-- /#wrapper -->

                <!-- jQuery -->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <!-- Bootstrap Core JavaScript -->
                <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
                <!-- Metis Menu Plugin JavaScript -->
                <script src="../vendor/metisMenu/metisMenu.min.js"></script>
                <!-- Morris Charts JavaScript -->
                <script src="../vendor/raphael/raphael.min.js"></script>
                <script src="../vendor/morrisjs/morris.min.js"></script>
                <script src="../data/morris-data.js"></script>
                <!-- Custom Theme JavaScript -->
                <script src="../dist/js/sb-admin-2.js"></script>

                </body>

 </html>
