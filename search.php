<?php
error_reporting(0);
include('session.php');
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
function multiexplode($delimiters, $string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}
$result = $db->query("select * from user where email='$login_session'");
while ($row = $result->fetch_assoc()) {
    $first_name     = $row['first_name'];
    $last_name      = $row['last_name'];
    $u_id           = $row['id'];
}
$result->free();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CDIS | Cancer and Disease Identification System">
    <meta name="author" content="Berk Cetinsaya">

    <title>Search</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Navigation -->
    <nav style="background-color:#800000;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CDIS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="profile.php"><?php echo $first_name . " " . $last_name ?></a>
                    </li>
                    <li>
                        <a href="logout.php">Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Search
                    <small><?php echo $first_name . " " . $last_name ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a style="color:#800000;" href="index.php">Home</a>
                    </li>
                    <li class="active">Search</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="profile.php" class="list-group-item "><?php echo $first_name . " " . $last_name ?></a>
                    <a style="background-color:#800000;" href="search.php" class="list-group-item active">Search</a>
                    <a href="message.php" class="list-group-item">Messages</a>
                </div>
            </div>
            <!-- Content Column -->
            <div id="content" class="col-md-9">
                <h2>Search</h2>
                <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-4 col-sm-3 col-md-3 col-lg-3">Quick Search:</label>
                        <div class="col-xs-8 col-sm-7 col-md-6 col-lg-7">
                            <input type="text" class="form-control" id="symptoms" name="awa1" placeholder="Write a single query!" autofocus><br />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-sm-offset-5 col-lg-offset-5 col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <input style="background-color:#800000;" type="submit" name="sub" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <h3>Symptomps</h3>
                    <div class="form-group">

                        <div style="height:260px;overflow:auto;" class="col-xs-12 col-sm-12 col-lg-12">
                            <table class="table table-striped">
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM symptoms";
                                    if (!$result = $db->query($sql)) {
                                        die('There was an error running the query [' . $db->error . ']');
                                    }
                                    $symptoms = array();
                                    while ($row = $result->fetch_assoc()) {
                                        $symptoms[] = $row['name'];
                                    }
                                    $result->free();
                                    $i1 = 0;
                                    foreach ($symptoms as $symp) {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo "<input type=\"checkbox\" id=\"$i1\" name=\"sym[]\" value=\"$symp\"/>";
                                        echo "</td>";
                                        echo "<td>";
                                        echo "<label for=\"$i1\"> $symp</label>";
                                        echo "</td>";
                                        echo "</tr>";
                                        $i1++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-sm-offset-5 col-lg-offset-5 col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <input style="background-color:#800000;" type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['sym'])) {
                    $sql = "SELECT name from symptoms where name in ('" . implode("','", $_POST['sym']) . "')";
                    if (!$result = $db->query($sql)) {
                        die('There was an error running the query [' . $db->error . ']');
                    }
                    $sympid = array();
                    while ($row = $result->fetch_assoc()) {
                        $sympname[] = $row['name'];
                    }
                    $result->free();
                    $sympimplode = implode(",", $sympname);
                    $sql = "INSERT  INTO `history` (`id`, `u_id`, `s_id`, time) 
                            VALUES (NULL, '{$u_id}', '{$sympimplode}', NULL)";
                    if (!$result = $db->query($sql)) {
                        die('There was an error running the query [' . $db->error . ']');
                    }
                    $sql = "SELECT * "
                        . " FROM disorder "
                        . " WHERE id IN (select d_id from symp_dis where s_id in (select id from symptoms where name in ('" . implode("','", $_POST['sym']) . "')))";
                    if (!$result = $db->query($sql)) {
                        die('There was an error running the query [' . $db->error . ']');
                    }
                    $disname = array();
                    $disid = array();
                    while ($row = $result->fetch_assoc()) {
                        $disid[] = $row['id'];
                        $disname[] = $row['name'];
                    }
                    $result->free();
                    $query = $db->query("SELECT d_id from symp_dis where s_id in ( select id from symptoms where name in ('" . implode("','", $_POST['sym']) . "'))");
                    $row_cnt = mysqli_num_rows($query);
                    $discal = array();
                    if ($sql = $db->prepare("SELECT count(d_id) from symp_dis where s_id in ( select id from symptoms where name in ('" . implode("','", $_POST['sym']) . "') and d_id = ?)")) {
                        foreach ($disid as $key => $value) {
                            $sql->bind_param('i', $value);
                            $sql->execute();
                            $sql->bind_result($did);
                            $sql->fetch();
                            $discal[$key] = ($did * 100) / $row_cnt;
                        }
                    }
                    arsort($discal);
                    ?>
                    <h3 class="col-xs-3">Diseases</h3>
                    <div style="height:260px;overflow:auto;" class="col-xs-12 col-sm-12 col-lg-12">
                        <table class="table table-striped">
                            <tbody>
                                <?php
                                foreach ($discal as $key => $value) {
                                    echo "<tr>";

                                    echo '<td><a href="http://en.wikipedia.org/wiki/' . $disname[$key] . '"target="_blank" >' . $disname[$key] . '</a></td>';
                                    echo '<td>' . round($discal[$key], 2) . ' %</td>';

                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <?php

                    $sql = "SELECT count "
                        . " FROM symptoms "
                        . " WHERE name in ('" . implode("','", $_POST['sym']) . "')";
                    if (!$result = $db->query($sql)) {
                        die('There was an error running the query [' . $db->error . ']');
                    }
                    $symp_count = array();
                    while ($row = $result->fetch_assoc()) {
                        $symp_count[] = $row['count'];
                    }
                    $result->free();
                    for ($number1 = 0; $number1 < sizeof($symp_count); $number1++) {
                        $cs = ++$symp_count[$number1];
                        $state = $db->prepare("UPDATE symptoms SET count = ? WHERE name IN ('" . implode("','", $_POST['sym']) . "')");
                        $state->bind_param('i', $cs);
                        $results = $state->execute();
                    }
                } else if (isset($_POST['sub'])) {

                    $index = 0;
                    $awa1 = ucwords(strtolower($_POST['awa1']));
                    $as = multiexplode(array(" "), $awa1);
                    for ($a = 0; $a < sizeof($symptoms); $a++) {
                        for ($b = 0; $b < sizeof($as); $b++) {
                            if ($symptoms[$a] == $as[$b]) {
                                $aa[$index] = $as[$b];
                                $index++;
                            }
                        }
                    }
                    if (empty($aa)) {
                        echo '<script type="text/javascript">';
                        echo 'alert("There is not any disease which is matching with your symptoms.");';
                        echo 'window.location.href = "search.php";';
                        echo '</script>';
                    } else {
                        $t = implode("','", $aa);
                        $sql = "SELECT * "
                            . " FROM disorder "
                            . " WHERE id IN (select d_id from symp_dis where s_id in (select id from symptoms where name in ('" . $t . "')))";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        $disname = array();
                        $disid = array();
                        while ($row = $result->fetch_assoc()) {
                            $disid[] = $row['id'];
                            $disname[] = $row['name'];
                        }
                        $result->free();
                        $query = $db->query("SELECT d_id from symp_dis where s_id in ( select id from symptoms where name in ('" . $t . "'))");
                        $row_cnt = mysqli_num_rows($query);
                        $discal = array();
                        if ($sql = $db->prepare("SELECT count(d_id) from symp_dis where s_id in ( select id from symptoms where name in ('" . $t . "') and d_id = ?)")) {
                            foreach ($disid as $key => $value) {
                                $sql->bind_param('i', $value);
                                $sql->execute();
                                $sql->bind_result($did);
                                $sql->fetch();
                                $discal[$key] = ($did * 100) / $row_cnt;
                            }
                        }
                        arsort($discal);
                        $sql = "SELECT name from symptoms where name in ('" . $t . "')";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        $sympid1 = array();
                        while ($row = $result->fetch_assoc()) {
                            $sympname1[] = $row['name'];
                        }
                        $result->free();
                        $sympimplode1 = implode(",", $sympname1);
                        $sql = "INSERT  INTO `history` (`id`, `u_id`, `s_id`, time) 
                            VALUES (NULL, '{$u_id}', '{$sympimplode1}', NULL)";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        ?>

                        <h3 class="col-xs-offset-1">Diseases</h3>
                        <div style="height:260px;overflow:auto;" class="col-xs-12 col-sm-12 col-lg-12">
                            <table class="table table-striped">
                                <tbody>
                                    <?php
                                    foreach ($discal as $key => $value) {
                                        echo "<tr>";

                                        echo '<td><a href="http://en.wikipedia.org/wiki/' . $disname[$key] . '"target="_blank" >' . $disname[$key] . '</a></td>';
                                        echo '<td>' . round($discal[$key], 2) . ' %</td>';

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        $sql = "SELECT count "
                            . " FROM symptoms "
                            . " WHERE name in ('" . $t . "')";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        $symp_count = array();
                        while ($row = $result->fetch_assoc()) {
                            $symp_count[] = $row['count'];
                        }
                        $result->free();
                        for ($number1 = 0; $number1 < sizeof($symp_count); $number1++) {
                            $cs = ++$symp_count[$number1];
                            $state = $db->prepare("UPDATE symptoms SET count = ? WHERE name IN ('" . $t . "')");
                            $state->bind_param('i', $cs);
                            $results = $state->execute();
                        }
                    }
                }
                $db->close();
                ?>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer align="center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CDIS <?php echo date('Y'); ?></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>