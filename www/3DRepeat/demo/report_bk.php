<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<?php include('includes/headerall.php'); ?>


<style type="text/css">
.column-left {
	float: left;
	width: 33%;
}

.column-right {
	float: right;
	width: 33%;
}

.column-center {
	display: inline-block;
	width: 33%;
}
</style>

</head>

<body>

	<div id="main">

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="page">


			<h3>Reports latest Updated 23/07/2014</h3>
			<ul>

				<li><b><a href="reports/report140723.html" target="_blank">Francois's
							DataSet : </a></b> by combined method 23 July 2014</li>


				<br />

				<div class="container">

					<div class="column-left">

						<img alt="Precision and recall" width="250" height="200"
							src="images/precision_recall_1405.png"> <pre>
       Date     : 16/05/2014
       Accuracy : 0.614           
    Sensitivity : 0.8209           
    Specificity : 0.4130         
							</pre>
					
					</div>
					<div class="column-center">

						<img alt="Precision and recall" width="250" height="200"
							src="images/precision_recall_1407.png"> <pre>
   Date     : 23/07/2014              
   Accuracy : 0.6676 <font color="green">&#9650 (+5.36%)</font>            
Sensitivity : 0.9050 <font color="green">&#9650 (+8.41%)</font>           
Specificity : 0.3490 <font color="red">&#9660 (-6.40%)</font>        
							</pre>
					
					</div>

					<div class="column-right">

						<img alt="Precision and recall" width="250" height="200"
							src="images/precision_recall_1408.png"> <pre>
   Date     : 12/08/2014              
   Accuracy : 0.8173 <font color="green">&#9650 (+14.97%)</font>             
Sensitivity : 0.9242 <font color="green">&#9660 (+1.92%)</font>           
Specificity : 0.5941 <font color="green">&#9660 (+24,51%)</font>        
							</pre>
					
					</div>

				</div>
			</ul>
			<h3>Reports 16/05/2014</h3>
			<ul>
				<li><b><a href="reports/nonre-reports.html" target="_blank">247
							non-repeats analysed : </a></b> 247 CATH domains is used for
					testing (RAPHAEL server).</li>
				<li><b><a href="reports/raf-db-reports.html" target="_blank">105
							repeats analysed : </a></b> 105 CATH domains is used for testing
					(RAPHAEL server).</li>
				<li><b><a href="reports/francois_reports.html" target="_blank">Francois's
							DataSet : </a></b> Found by Francois's Meta Server Finder.</li>



			</ul>

			<h3>Dataset</h3>
			<ul>
				<li>35% sequence identity:</li>

				<ul>
					<li><b><a
							href="http://protein.bio.unipd.it/raphael/model/nonsols.tar.gz"
							target="_blank">247 non-repeats: </a></b> 247 CATH domains used
						for training and testing.</li>
					<li><b><a
							href="http://protein.bio.unipd.it/raphael/model/sols.tar.gz"
							target="_blank">105 repeats: </a></b> 105 CATH domains used for
						training and testing.</li>
					<li><b><a
							href="http://protein.bio.unipd.it/raphael/model/insertions.txt"
							target="_blank">Insertions: </a></b> Residues assigned visually
						as periodic or not part of the periodicity.</li>
					<li><b><a
							href="http://protein.bio.unipd.it/raphael/model/repeatlength.txt"
							target="_blank">Repeat length: </a></b> The repeating unit length
						assigned visually.</li>
				</ul>

			</ul>

		</div>
		<!-- end #content -->



<?php include('includes/footer.php'); ?>

		</div>
	<!-- End #wrapper -->

</body>

</html>