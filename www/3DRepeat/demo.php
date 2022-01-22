<?php
/**
 * Created by IntelliJ IDEA.
 * User: pdoviet
 * Date: 9/2/2015
 * Time: 12:53 PM
 */


$pdbCode = $_GET ['code'];
$pdbChain = $_GET ['chain'];
$initalScript = "'load http://www.rcsb.org/pdb/files/" . $pdbCode . ".pdb.gz;select:" . $pdbChain.";";
$initalScript = $initalScript . "spacefill off;wireframe off;cartoons on;restrict selected;color gray;color background  [241 241 241];'";

?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="jsmol/JSmol.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            Info = {
                width: 680,
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
            $("#mydiv").html(Jmol.getAppletHtml("jmolApplet0", Info))

        });


    </script>
</head>
<body>

<span id="mydiv">

<script type="text/javascript">
    jmolApplet0 = Jmol.getApplet("jmolApplet0", Info);

</script>
</span>

</body>
</html>