<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<?php include('includes/headerall.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#submit').click(function() {
			getContent('services/fakestruct.php');
		});

	});
	
	function getContent(service) {
		//alert(proCode);
		$.ajax({
			url : service,
			type : 'GET',
			dataType : 'html',
			beforeSend : function() {
				$('#result').html(
						'<img src="images/loading.gif" />');
			},
			success : function(data, textStatus, xhr) {

				$('#result').html(data);

			},
			error : function(xhr, textStatus, errorThrown) {
				
				$('#result').html(textStatus);
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
			<h3>TOOLS</h3>
			<h4>1.Fake Proteins Structure</h4>
			<p>To access the significane of TRs score, a random protein model was
				required. This tool allows you to creat a "fake" structure by
				implementing random-walk algorithm with enormous templates of
				secondary structure.</p>

			<p>
				Backbone atoms may be reconstructed from a CA trace using the
				MaxSprout server at <a href="http://www.ebi.ac.uk/maxsprout">http://www.ebi.ac.uk/maxsprout</a>
				.
			</p>
			<img alt="Fake structre" src="images/fake1.jpg"><br /> <br />

				<button id="submit" class="content1 btn">Generate Fake Structure</button>
				<div id="log">
					<pre>
					<div id="result">Structure will be here</div>
					</pre>
				</div>
		
		</div>
		<!-- end #content -->



<?php include('includes/footer.php'); ?>

		</div>
	<!-- End #wrapper -->

</body>

</html>