<?php include('configure.php'); ?>
<?php

$pdbCode = $_GET ['code'];
$pdbChain = $_GET ['chain'];
$pid = $_GET ['pid'];
// http://localhost:8888/?service=show&code=1LXA&chain=A
try {
    // $html = file_get_contents ( $webservice_url . "/?service=show&code=" . $pdbCode . "&chain=" . $pdbChain );
//	$html = file_get_contents ( $webservice_url . "/output/" . strtolower ( $pdbCode ) . $pdbChain . ".out.combined" );
    // $html = file_get_contents ( $webservice_url . "/output/" . strtolower ( $pdbCode ) . $pdbChain . ".out" );
    $query = $webservice_url . "/finder/?service=showAll&code=" . strtolower($pdbCode) . "&chain=" . strtoupper($pdbChain) . "&pid=" . $pid;
    $html = '<div id="logReport">';
    $html = $html . "" . file_get_contents($query);
    $html = $html . "</div>";
    echo $html;

} catch (ErrorException $e) {
    echo "error!!!! ";
}

?>