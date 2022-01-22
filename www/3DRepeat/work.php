<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('services/configure.php'); ?>
<?php

// query
$pdbCode = $_GET ['code'];
$pdbChain = $_GET ['chain'];
$pid = $_GET ['pid'];
$urlerrors = "../errors.php";
$autorefesh = "<meta http-equiv=\"refresh\" content=\"60\">";
$JOB_STATUS = "ERROR";
$JOB_COLOR = "red";
$JOB_MESSAGE = "";
$JOB_IMAGE_LOADING = "<p align=\"middle\"><img src=\"images/loading.gif\"/></p>";
try {
    $query = $webservice_url . "/finder/?service=read&code=" . strtolower($pdbCode) . "&chain=" . strtoupper($pdbChain) . "&pid=" . $pid;

    // echo $query;
    // $rep = intval ( file_get_contents ( $query ) );

    $rep = trim(file_get_contents($query));
    // $rep = "r";
    // echo startsWith("abcdef", "abcd");
    // var_dump ( $rep );
    // echo strcmp ( $rep, "e" ) ;
    if (strcmp($rep, "f_Y") == 0) {
        $urlWork = "result.php?code=" . strtolower($pdbCode) . "&chain=" . strtoupper($pdbChain) . "&pid=" . $pid;
        //echo $urlWork;
        redirect($urlWork);
    } else if (strcmp($rep, "f_N") == 0) {
        $autorefesh = "";
        $JOB_STATUS = "FINISH!!!";
        $JOB_COLOR = "green";
        $JOB_MESSAGE = "THERE IS NO TANDEM REPEATS!!!!";
        $JOB_IMAGE_LOADING = "";
    } else if (strcmp($rep, "e") == 0) {
        $autorefesh = "";
        $JOB_STATUS = "ERROR...";
        $JOB_COLOR = "red";
        $JOB_MESSAGE = "Your job has been killed because of some reasons: your input is not correct format, server is down ...";
        $JOB_IMAGE_LOADING = "";
    } else if (startsWith($rep, "E") == 1) {
        $autorefesh = "";
        $JOB_STATUS = "ERROR...";
        $JOB_COLOR = "red";
        $JOB_MESSAGE = "Your job has been killed because of some reasons: your input is not correct format, server is down ...";
        $JOB_IMAGE_LOADING = "";
    } else if (strcmp($rep, "r") == 0) {
        $JOB_STATUS = "RUNNING...";
        $JOB_COLOR = "green";
        $JOB_MESSAGE = "The process may take some time. The final
				output will appear on this page, which will be automatically
				refreshed in 60 seconds. Please do not close this window unless
				bookmarked";
    } else {
        $JOB_STATUS = "WAITING...";
        $JOB_COLOR = "orange";
        $JOB_MESSAGE = "The process may take some time. The final
				output will appear on this page, which will be automatically
				refreshed in 60 seconds. Please do not close this window unless
				bookmarked";
    }
} catch (ErrorException $e) {
    echo "error!";
    redirect($urlerrors);
}

/* redicrect url */
function redirect($url)
{
    header('Location: ' . $url);
    die ();
}

function startsWith($haystack, $needle)
{
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}

function endsWith($haystack, $needle)
{
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}

?>


<head>
    <?php include('includes/headerall.php'); ?>
    <?php
    echo $autorefesh;
    ?>

</head>
<?php include('services/configure.php'); ?>


<body>

<div id="main">

    <?php include('includes/header.php'); ?>

    <?php include('includes/nav.php'); ?>

    <div id="page">
        <h4>Title</h4>

        <p>request : <?php echo $pdbCode . $pdbChain; ?> <br/> pid: <?php echo $pid ?></p>
        <h4>
            Status: <font style="color: <?php echo $JOB_COLOR ?>; "> <b><?php echo $JOB_STATUS ?></b></font>
        </h4>

        <?php echo $JOB_IMAGE_LOADING ?>
        <p> <?php echo $JOB_MESSAGE ?></p>
    </div>
    <!-- end #content -->
    <?php include('includes/footer.php'); ?>
</div>
<!-- End #wrapper -->
</body>
</html>