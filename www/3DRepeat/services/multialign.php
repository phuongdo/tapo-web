<?php include('configure.php'); ?>
<?php

$pdbCode = $_GET ['code'];
$pdbChain = $_GET ['chain'];
$align = $_GET ['align'];

// http://localhost:8888/mutilalign/?code=1LXA&chain=A&align=30-39;42-51;54-63
try {
	
	// $remoteImage = $webservice_url . "/mutilalign/?code=" . $pdbCode . "&chain=" . $pdbChain . "&align=" . $align;
	// $remoteImage = $img_src = "../images/Work_in_progress_icon.png";
	
	// echo "<img class='ImageMSA' src='" . $src . ">";
	
	// $image = $src;
	// Read image path, convert to base64 encoding
	
	// $imageData = base64_encode ( file_get_contents ( $remoteImage ) );
	
	// Format the image SRC: data:{mime};base64,{data};
	// $src = 'data:image/png;base64,' . $imageData;
	// $src = "services/imagecache.php?code=" . strtolower ( $pdbCode ) . "&chain=" . $pdbChain . "&align=" . $align;
	// Echo out a sample image
	// echo '<img id="imgMSA" class="ImageMSA" onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="', $src, '">';
	// echo file_get_contents ( "http://localhost:8888/mutilalign/?code=" . $pdbCode . "&chain=" . $pdbChain . "&align=" . $align );
	
	$remoteHTML = $webservice_url . "/mutilalign/?code=" . $pdbCode . "&chain=" . $pdbChain . "&align=" . $align;
//	echo $remoteHTML;
	echo file_get_contents ( $remoteHTML );
} catch ( ErrorException $e ) {
	echo "mutiple alignment error!!!! ";
}

?>

