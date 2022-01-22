<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <script type="text/javascript" src="jsmol/JSmol.min.js"></script>
    <?php include('includes/headerall.php'); ?>
    <?php include('services/configure.php'); ?>
    <?php

    $pdbCode = $_GET ['code'];
    $pdbChain = $_GET ['chain'];
    $pid = $_GET ['pid'];

    $initalScript = "'load http://www.rcsb.org/pdb/files/" . $pdbCode . ".pdb.gz;select:" . $pdbChain . ";";
    $initalScript = $initalScript . "spacefill off;wireframe off;cartoons on;restrict selected;color gray;color background  [241 241 241];'";
    ?>

    <script type="text/javascript">

        $(document).ready(function () {
            Info = {
                width: 400,
                height: 400,
                debug: false,
                zoom: 0,
                bondWidth: 4,
                zoomScaling: 1.1,
                pinchScaling: 2.0,
                mouseDragFactor: 0.5,
                touchDragFactor: 0.15,
                multipleBondSpacing: 4,
                spinRateX: 0.2,
                spinRateY: 0.5,
                spinFPS: 20,
                spin: true,
                j2sPath: "jsmol/j2s",
                color: "white",
                disableJ2SLoadMonitor: true,
                disableInitialConsole: true,
                addSelectionOptions: false,
                //serverURL: "http://chemapps.stolaf.edu/jmol/jsmol/php/jsmol.php",
                use: "HTML5",
                readyFunction: null,
                script: <?php echo $initalScript;?>
            }
            $("#jsmol").html(Jmol.getAppletHtml("jmolApplet0", Info))


        });
        // these are conveniences that mimic behavior of Jmol.js

        function bigImg(x) {
            $('#imgMSA').removeClass('ImageMSA');
        }
        function normalImg(x) {
            $('#imgMSA').addClass('ImageMSA');
        }
        //        function callJSmolScript(script) {
        //            Jmol.cript(jmolApplet0, script);
        //        }

        function visualizeRepeats(jsmolScript, align) {
            try {
                Jmol.script(jmolApplet0, jsmolScript);

            } catch (err) {
                //
            }

            try {
                view_mutilalign_ajax(align);
               // alert(align)

            } catch (err) {
                //
            }

        }
        function view_mutilalign_ajax(align) {
            var proCode = '<?php echo $pdbCode ?>';
            var proChain = '<?php echo $pdbChain?>';
            getContent('services/multialign.php', proCode, proChain, align);
        }

        function show_more() {
            var proCode = '<?php echo $pdbCode ?>';
            var proChain = '<?php echo $pdbChain?>';
            var pid = '<?php echo $pid?>';
            getShowMoreContent('services/combinedshow.php', proCode, proChain, pid);
        }


        function getShowMoreContent(service, proCode, proChain, pid) {
            //alert(proCode);
            $.ajax({
                url: service,
                type: 'GET',
                data: {
                    'code': proCode,
                    'chain': proChain,
                    'pid': pid
                },
                dataType: 'html',
                beforeSend: function () {
                    $('#showMore').html(
                        '<img src="images/loading.gif" />');
                },
                success: function (data, textStatus, xhr) {
                    $('#showMore').html(data);
                },
                error: function (xhr, textStatus, errorThrown) {

                    $('#showMore').html(textStatus);
                }
            });
        }


        function getContent(service, proCode, proChain, align) {
            //alert(proCode);
            $.ajax({
                url: service,
                type: 'GET',
                data: {
                    'code': proCode,
                    'chain': proChain,
                    'align': align
                },
                dataType: 'html',
                beforeSend: function () {
                    $('#multialignarea').html(
                        '<img src="images/loading.gif" />');
                },
                success: function (data, textStatus, xhr) {
                    $('#multialignarea').html(data);
                },
                error: function (xhr, textStatus, errorThrown) {

                    $('#multialignarea').html(textStatus);
                }
            });
        }

    </script>
</head>
<body>

<div id="main">
    <?php include('includes/header.php'); ?>
    <?php include('includes/nav.php'); ?>

    <div id="page">
        <div class="applet">
            <div id="jsmol"></div>
            <div ng-show="show3d"
                 style="margin-top: 3px; text-align: center; font-size: 0.8em;"
                 class="row-fluid">
                If you can't see the 3D representation, please check the <a
                    href="help.php">FAQs</a>
            </div>
        </div>
        <div id="multialignarea" class="multialignarea"
             style="border: 1px solid orange; padding: 10px; margin-bottom: 5px;">
            MSA will appear here.
        </div>
        <div id="log">
            <?php

            $query = $webservice_url . "/finder/?service=show&code=" . strtolower($pdbCode) . "&chain=" . strtoupper($pdbChain) . "&pid=" . $pid;
            // $html = file_get_contents ( $webservice_url . "/output/" . strtolower ( $pdbCode ) . $pdbChain . ".out" );
            $html = file_get_contents($query);
            echo $html;
            ?>
        </div>

        <button id="submit" onclick="show_more()" class="content1 btn">Show
            all TRs...
        </button>
        <div id="showMore"></div>

    </div>
    <!-- end #content -->

    <?php include('includes/footer.php'); ?>

</div>
<!-- End #wrapper -->

</body>

</html>