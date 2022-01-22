<?php include('configure.php'); ?>
<?php

try {
	$html = file_get_contents ( $webservice_url . "/fakestruct/" );
	echo $html;
} catch ( ErrorException $e ) {
	echo "error!!!! ";
}

?>