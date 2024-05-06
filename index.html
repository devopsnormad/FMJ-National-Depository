<?php
require_once('sudo/assets/config/config.php');
$connect = mysqli_connect("localhost", "root", "", "treaties_db");
if (isset($_POST["submit"])) {
    if (!empty($_POST["search"])) {
        $query = str_replace(" ", "+", $_POST["search"]);
        header("location:index.php?search=" . $query);
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - National Depository Of Treaties</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/ico.png" />

    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/cardslider.css">
    <link rel="stylesheet" href="css/responsiveslides.css">

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target="#mainmenu" data-offset="50">

    <header class="relative" id="sc1">
        <!-- Header-background-markup -->
        <div class="header-bg relative home-slide">
            <div class="item">
                <img src="images/slide/01.png" alt="Treaty_DataBase">
            </div>
            <div class="item">
                <img src="images/slide/02.png" alt="Treaty_DataBase">
            </div>
            <div class="item">
                <img src="images/slide/03.png" alt="Treaty_DataBase">
            </div>
        </div>
        <!-- Mainmenu-markup-start -->
        <div class="mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="10">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="space-10"></div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--Logo-->
                        <a href="#sc1" class="navbar-left show"><img src="images/logo-2.png" alt="Treaty_DataBase" width="70%" class="img-responsive"></a>
                        <div class="space-10"></div>
                    </div>
                    <!--Toggle-button-->

                    <!--Mainmenu list-->
                    <!-- navbar-right in fade -->
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav nav-white text-uppercase">
                            <li class="active">
                                <a href="#sc1">Home</a>
                            </li>
                            <li>
                                <a href="treaties.php">CATALOGUES</a>
                            </li>
                            <!-- <li>
                                <a href="staff/pages_staff_index.php" title="Staff Login">UPLOAD TREATY</a>
                            </li>
                            <li>
                                <a href="sudo/pages_sudo_index.php" title="Admin Login">LOGIN</a>
                            </li> -->
                            <li class="position-relative">
                                <a title="Login">LOGIN</a>
                                <ul class="dropdown_list">
                                    <li>
                                    <a href="sudo/pages_sudo_index.php" title="Admin Login">Login as Admin</a>
                                    </li>
                                   <li>
                                   <a href="sudo/pages_staff_index.php" title="Admin Login">Login as Staff</a>
                                   </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="space-100"></div>
        <!-- Mainmenu-markup-end -->
        <!-- Header-jumbotron -->
        <div class="space-100"></div>
        <div class="header-text">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                        <div class="jumbotron">
                            <h1 class="text-white">National Depository Of Treaties</h1>
                            <p class="text-white" style="text-align: center;">The National Depository of Treaties under the Federal Ministry of Justice in Nigeria is responsible for
                                the safekeeping and management of international agreements, conventions, and treaties entered into by the Nigerian government with
                                other countries and international organizations. </p>
                        </div>
                        <div class="title-bar white">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-40"></div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ">
                        <div class="panel">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <p style="text-align: center;">Search Treaty Database</p>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="treaty">
                                        <form action="treaties.php" method="GET">
                                            <div class="input-group">
                                                <input type="text" id="search" class="form-control" name="search_id" value="<?php if (isset($_GET['search_id'])) {
                                                                                                                                echo $_GET['search_id'];
                                                                                                                            } ?>" placeholder="Enter document title">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary px-3">Search <i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>

                                            <?php
                                            $ret = null;
                                            $res = null;

                                            if (isset($_GET['search_id'])) {
                                                $search_id = $_GET['search_id'];

                                                // Debugging: print the query to the error log
                                                $ret = "SELECT * FROM tbl_treaties WHERE tc_name = ? OR signatory = ? OR title = ? ";
                                                error_log("SQL query: $ret");

                                                try {
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->bind_param("sss", $search_id, $search_id, $search_id);
                                                    $stmt->execute();
                                                    $res = $stmt->get_result();
                                                } catch (Exception $e) {
                                                    error_log("Error executing SQL query: " . $e->getMessage());
                                                    $res = null;
                                                }
                                            }

                                            if ($res != null) {
                                                while ($row = $res->fetch_object()) {
                                            ?>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="category-item well green">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5><img src="images/file_icon.png" alt="<?= $row->title ?>" />&ensp;<span class="trim"><?= $row->title ?></span></h5>
                                                                    <h6>Category: <?= $row->tc_name ?></h6>
                                                                    <div class="space-10"></div>
                                                                    <div class="title-bar blue text-center">
                                                                        <ul class="list-inline list-unstyled">
                                                                            <li><i class="icofont icofont-square"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="space-10"></div>
                                                                    <div class="row">
                                                                        <div class="col-md-4"><a href="treaty.php?doc_id=<?php echo $row->id ?>" class="text-primary">View</a></div>
                                                                        <div class="col-md-8">
                                                                            <img src="images/card-logo.png" alt="<?= $row->title ?>" class="img-responsive" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            } else {
                                                // echo "No record";
                                            }
                                            ?>
                                    </div>
                                    <div class="tab-pane fade" id="author">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter author name">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="publisher">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter publisher name">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <!-- Header-jumbotron-end -->
    </header>

    <section>
        <div class="space-80"></div>
        <div class="container">
            <div class="row" style="margin-left:0.15rem; margin-right: 0.15rem">
                <div class="col-12 text-center">
                    <h2>About the <span class="text-primary">Treaty Database</span> </h2>
                    <div class="space-20"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-30"></div>
                    <p class="text-left text_lg">The National Depository of Treaties under the Federal Ministry of Justice in Nigeria is responsible for
                        the safekeeping and management of international agreements, conventions, and treaties entered into by the Nigerian government with
                        other countries and international organizations. The depository serves as a repository of all the official documents related to these
                        agreements and ensures that they are easily accessible to relevant stakeholders, including government officials, researchers, and the
                        general public. Its primary function is to promote transparency, accountability, and the rule of law in the conduct of international
                        relations by the Nigerian government.
                    </p>
                </div>
            </div>
            <div class="space-60"></div>
            <h3 style="text-align: center;">Treaties <span class="text-primary">Catalogues</span> </h3>
            <div class="space-20"></div>
            <div class="row">
                <!--Show Book Categories-->
                <?php
                //Fetch all treaty categories
                $ret = "SELECT * FROM tbl_treatiescategory";
                $stmt = $mysqli->prepare($ret);
                $stmt->execute(); //ok
                $res = $stmt->get_result();
                while ($row = $res->fetch_object()) {

                ?>
                    <div class="justify col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="category-item well blue">
                            <div>
                                <!-- <p>Newly added treaties</p> -->

                                <h3><?= $row->name; ?></h3>
                                <p class="trim"><?= $row->description; ?></p>
                                <div class="text-center">

                                    <div class="space-10"></div>
                                    <div class="title-bar blue">
                                        <ul class="list-inline list-unstyled">
                                            <li><i class="icofont icofont-square"></i></li>
                                        </ul>
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                            </div>
                            <a href="category.php?id=<?= $row->id ?>"><button class="btn btn-success">View Documents <img src="sudo/assets/img/arrow_icon_white.png" alt="arrow icon" width="35px" /></button></a>
                        </div>
                    </div>
                <?php } ?>
                <!--End book categories -->
            </div>
            <div class="space-20"></div>
            <div class="row">

            </div>
            <div class="space-40"></div>
        </div>
    </section>
    <!--Footer-->
    <?php require_once('partials/footer.php'); ?>

    <!-- Vandor-JS -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!-- Plugin-JS -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/jquery.cardslider.min.js"></script>
    <script src="js/pagination.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- Active-JS -->
    <script src="js/main.js"></script>

</body>

</html>