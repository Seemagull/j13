<!DOCTYPE html>
<html>
<head>
	<style>
		.contanier
		{
			
			background: linear-gradient(to left, #00ffcc 0%, #33cc33 100%);
			width: 100%;
			height: 60%;
			text-align: center;
		}

input[type="text"]
{
	width: 190px;
	height: 31px;
	border-radius: 12px;

}
input[type="submit"]
{
   width: 90px;
   height: 29px;
   border-radius: 15px;
   margin-top: 10px;
   color: #fff;
    background-color: #0495c9;
    border-color: #357ebd; /*set the color you want here*/
}
 input[type="submit"]:hover

{
	    color: #fff;
    background-color:red;
    border-color:green; /*set the color you want here*/
}






	</style>
<body>
<?php

if(isset($_POST['enter'])){
	$num=$_POST['numb'];
	function check_prime($num)
	{
		$is_prime=true;
		for($a=2;$a<$num;$a++)
		{
			if($num%$a==0)
			{
				$is_prime=false;	
			}
		}
		if($is_prime==true){
			return "number is prime";
		}
		else{
			return "number is not prime";
		}
	}
	$result=check_prime($num);

}

?>
 <div class="contanier">
 	<h1><i><u><center> FIND THE NUMBER IS PRIME OR NOT</i></u></center> </h1>
 	<div class="wrapper">
 		<form action="" method="POST">
 			<h2> ENTER A NUMBER </h2>
 			<input type="text" placeholder="enter a number" name="numb"/></br>
 			<label><blold>output:</blold></label></br>
 			<input type="text" name="enter" value="<?php echo @$result; ?>"/></br>
 			<input type="submit" name="enter" value="enter">
 		</form>

</body>
</html>