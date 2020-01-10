<!DOCTYPE html>
<html>
<head>
	<title> Php Table </title>
	<style> 
	body
	{
		background: url('table.jpg')  no-repeat  ;
    background-size: cover;
  }

  
  .main
  {
  	text-align: center;
  	
  
  	font-size: 27px;
  	margin-top: 23%;
  	margin-left: 18%;
  	
  }


	</style>








</head>

<body>
 <div class="main">
	<h1>Table Of 2 </h1>

	<?php

	$x=2;
	 for ($y=1; $y<=10 ; $y++) { 
	 	echo $x. "x".$y."=".$x*$y."<br>";

	 }
	 
    ?>
</div>


</body>
</html>