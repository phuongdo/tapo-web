<?php include('configure.php'); ?>
<?php
//set_time_limit(0);
// set_time_limit ( 500 );
$pdbCode = $_POST ['code'];
$pdbChain = $_POST ['chain'];
$urlerrors = "../errors.php";
try {

	$pid = uniqid ();
	$query = $webservice_url . "/finder/?service=analyse&code=" . strtolower ( $pdbCode ) . "&chain=" . strtoupper ( $pdbChain ) . "&pid=" . $pid;
	//echo $query;
//	echo $query;

	$rep = intval ( get_data ( $query ) );
	if ($rep == 1) {
		$userQuery = "work.php?code=" . strtolower ( $pdbCode ) . "&chain=" . strtoupper ( $pdbChain ) . "&pid=" . $pid;
		$cookie_name = "userQueries";
		if(!isset($_COOKIE[$cookie_name])) {
			$queries = array();
			$queries[] = $userQuery;
			setcookie($cookie_name, serialize($queries), time() + (86400 * 30), "/");
		} else {
			$queries = unserialize($_COOKIE[$cookie_name]);
			$queries[] = $userQuery;
			setcookie($cookie_name, serialize($queries), time() + (86400 * 30), "/");
		}
		$urlWork = "../work.php?code=" . strtolower ( $pdbCode ) . "&chain=" . strtoupper ( $pdbChain ) . "&pid=" . $pid;
		redirect ( $urlWork );

	} else {

		redirect($urlerrors);
//		echo "Service is unavailable!!!!";
	}
} catch ( ErrorException $e ) {
//	echo "analysis  error!!!! ";

	redirect($urlerrors);
}

/* redicrect url */
function redirect($url) {
	header ( 'Location: ' . $url );
	die ();
}

/* gets the data from a URL */
function get_data($url) {
	$ch = curl_init ();
	$timeout = 1000;
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	$data = curl_exec ( $ch );
	curl_close ( $ch );
	return $data;
}
?>

