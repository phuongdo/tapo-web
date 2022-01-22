<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php include('includes/headerall.php'); ?>


    <style type="text/css">
        .column-left {
            float: left;
            width: 33%;
        }

        .column-right {
            float: right;
            width: 33%;
        }

        .column-center {
            display: inline-block;
            width: 33%;
        }
    </style>

</head>

<body>

<div id="main">

    <?php include('includes/header.php'); ?>

    <?php include('includes/nav.php'); ?>

    <div id="page" >


        <h3>Benchmark results (Updated 26/06/2015)</h3>

        <p>

            Here are all TRs detection results obtained for the complete benchmark dataset (Dataset-TR)</p>

        <div >

            <div id="logReport">
                <?php

                $query = "data/report.html";
                // $html = file_get_contents ( $webservice_url . "/output/" . strtolower ( $pdbCode ) . $pdbChain . ".out" );
                $html = file_get_contents($query);
                echo $html;
                ?>
            </div>

        </div>


    </div>
    <!-- end #content -->


    <?php include('includes/footer.php'); ?>

</div>
<!-- End #wrapper -->

</body>

</html>