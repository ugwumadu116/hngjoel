<html>

	<head>
		<title>Basic  </title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet type="text/css"  />
	</head>
	<body>
		<div id="header">
			<h1>HNG intership</h1>
			
		</div>

		<table id="structure">
				<tr>
					
					<td id="page">
						<h2> HNG </h2>
						<h3> Find Discounted Hotel Deals Here </h3>
						<br />
						<?php 
						/*$datenow = date("i, d F Y");
						$timenow = date("g:i a", time());
						print $datenow;
						print $timenow;*/

						$date = date('d F Y');
						$time = date('g:i a');
						echo '<p>the current time is <span class="bold">' . $time . '</span> </p> <br />'; 

						echo '<p>the current date is <span class="bold">' . $date  . '</span> </p>';

						 ?>
						
					</td>
				</tr>
			</table>

		<div id="footer">Copyright 2018 JOEL UGWUMADU</div>
	</body>


</html>