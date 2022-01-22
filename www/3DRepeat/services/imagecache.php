<?php include('configure.php'); ?>
<?php

$pdbCode = $_GET ['code'];
$pdbChain = $_GET ['chain'];
$align = $_GET ['align'];

// http://localhost:8888/mutilalign/?code=1LXA&chain=A&align=30-39;42-51;54-63
try {
	
	$remoteImage = $webservice_url . "/mutilalign/?code=" . strtolower ( $pdbCode ) . "&chain=" . $pdbChain . "&align=" . $align;
	// echo "<img class='ImageMSA' src='" . $src . ">";
	
	// $image = $src;
	// Read image path, convert to base64 encoding
	
	header ( 'Content-type: image/png' );
	imagepng ( imagecreatefrompng ( $remoteImage ) );
	
	// echo file_get_contents ( "http://localhost:8888/mutilalign/?code=" . $pdbCode . "&chain=" . $pdbChain . "&align=" . $align );
} catch ( ErrorException $e ) {
	echo "mutiple alignment error!!!! ";
}

?>

