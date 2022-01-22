<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/cgit.css"
	media="screen" />

<img src="senlogo.png" width="120px" height="60px">

<br />
<a href="sentiment.php"> Back to Home </a>

<div id="cgit">
	<table class="diffstat">
		<tbody>
		
<?php
$text = htmlspecialchars ( $_POST ['list_sents'] );

$textAr = explode ( PHP_EOL, $text );
$textAr = array_filter ( $textAr, 'trim' ); // remove any extra \r characters left behind

foreach ( $textAr as $line ) {
	// processing here.
	
	// echo $api_url . "/sent/api/" . $line;
	classifyText ( $line );
}
function classifyText($line) {
	// $api_url = 'http://123.30.53.90:8889';
	$api_url = 'http://localhost:8889';
	// send to sever
	
	$output = file_get_contents ( $api_url . "/sent/api/" . urlencode ( $line ) );
	
	// var_dump($output);
	// pos-0.0000;neg-1.0000
	$arrs = explode ( ";", $output );
	
	// var_dump ( $arrs );
	$pos = 0.5;
	$neg = 0.5;
	foreach ( $arrs as $ar ) {
		
		// processing here.
		
		$texs = explode ( ":", $ar );
		if ($texs [0] == "pos")
			$pos = floatval ( $texs [1] );
		
		if ($texs [0] == "neg")
			$neg = floatval ( $texs [1] );
	}
	
	$strPos = "<td class='add' style='width: " . $pos . "%;'></td>";
	$strNeg = "<td class='rem' style='width: " . $neg . "%;'></td>";
	
	$builder = "<tr><td width='70%'>" . $line . "</td><td class='graph'><table width='100%'><tbody><tr>" . $strPos . $strNeg . "</tr></tbody></table></td></tr>";
	echo $builder;
	// echo $line . "</br>";
}

?>
		</tbody>
	</table>
</div>