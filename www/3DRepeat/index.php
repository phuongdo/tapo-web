<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<?php include('includes/headerall.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
// 		$('#submit').click(function() {
// 			var proCode = $("#code").val().toLowerCase();
// 			getContent('services/subcrible.php', proCode);
// 		});

		$("#code").keyup(function(event){
		    if(event.keyCode == 13){
		        $("#submit").click();
		    }
		});
		
	});

	function getContent(service, proCode) {
		//alert(proCode);
		$.ajax({
			url : service,
			type : 'GET',
			timeout: 600000,// 60 seconds
			data : {
				'code' : proCode
			},
			dataType : 'html',
			beforeSend : function() {
				$('#contentarea').html(
						'<img src="images/loading.gif" /> <br/> processing...');
			},
			success : function(data, textStatus, xhr) {

				$('#contentarea').html(data);

			},
			error : function(xhr, textStatus, errorThrown) {
				if(t==="timeout") {
					$('#contentarea').html("Timeout: This protein is too big!!!");
		        } else {
		        	$('#contentarea').html(textStatus);
		        }
			
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

			<div id="page-company-left" style="text-align: center;">

				<br /> <br />
				<div id='div' style='display: block; height: 300px'>

					<form name="TaPoInput" method="post"
						action="services/subcrible.php">
						<font color='black'
							face='britanic,helvetica,sans-serif,times,gill,courier' size='4'>
						Enter the PDB-id code </font>
						<input style="text-align: center;" type="text" name="code"
							id="code" size="4" maxlength="4" value="1a4y"> <font
							color='black'
							face='britanic,helvetica,sans-serif,times,gill,courier' size='4'>
							chain </font>
						
						<input style="text-align: center;" type="text" name="chain"
							id="chain" size="1" maxlength="1" value="A">
						
						<button id="submit" class="content1 btn">Submit</button>
						<a class="infobulle"><span>Entering the 4 letter PDB ID and its chain ID. For
								example, entering simply 1a4y and A. </span></a>
						<br />

					</form>
					<div>
						<center><img src="images/beta.png" alt="Beta version"></center>

					</div>

				</div>


			</div>


			<!-- end #content -->


			<!-- end #sidebar -->
		</div>
<?php include('includes/footer.php'); ?>

		</div>
	<!-- End #wrapper -->

</body>

</html>