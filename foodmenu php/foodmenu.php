<!DOCTYPE html>
<html>
<head>
	<title>document</title>
	<style>
	body{
		background: url(pic8.jpg) no-repeat;
    background-size: cover;
	}
		form
		{
      padding-top: 70px;
      padding-left: 30px;
     
			color: blue;
			border-radius: 12px;
		}
	input [type="text"]
    {
      width: 30px;
      height: 40px;

    }
    input[type="submit"]
    {
      width: 13%;
      height: 40px;
      border-radius: 15px;
      font-size: 30px;
      margin-top: 10px;

    }
    p
    {
    font-size: 270%;
    color:blue;
    }
    .form
    {
      text-align: center;

    }
    input[type="text"]
    {
      width: 250px;
      height: 50px;
      border-radius: 20px;
      margin-top:20px;

    }


	</style>
</head>
<body>
  <div class="form">
	<h1> food menu</h1>
 <form action="" method="post">
 <h2> Enter day</h2>
<div>
 <input type="text" placeholder="enter your day" name="day">
</br>
 <input type="submit"  value="submit" name="submit">
 </div> 
</form>
   <?php
   //var_dump($_POST);

   if(isset($_POST['submit'])){
   $day=$_POST['day'];
   if($day=="monday")
   {
   	echo "<p>your meal is beryani</p>";
   }
    elseif($day=="tuesday")
   {
   	echo "<p> your meal is buger </p>";
   }
    elseif($day=="wednesday")
   {
   	echo "<p> your meal is past</p>";
   }
    elseif($day=="thursday")
   {
   	echo "<p> your meal is chicken</p>";
   }
    elseif($day=="friday")
   {
   	echo "<p> your meal is nonthing</p>";
   }
   else{
   	echo "<p>none</p>";
   }
}

   ?>


 </div> 


</body>
</html>