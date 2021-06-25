<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=IBM+Plex+Mono:ital,wght@0,400;1,700&family=Josefin+Sans:wght@200;400&family=Righteous&display=swap" rel="stylesheet">

<style>
body{
	 background:#F5F5F5;
	 background-image:url('php.png');
    background-repeat:no-repeat;
}
.container {
	color:#cf352e;
  font-size: 16px;
  font-family: 'Righteous', cursive;;
  word-spacing: 1 em;
  max-width: 500px;
  margin: auto;
  margin-top: 60px;
  border: 5px solid #cf352e;
  background: white;
  padding: 25px;
  border-radius: 5px; 
}
input[type=submit] {
  text-align: center;
  background-color: #cf352e;
  color: white;
  font-size: 1.125em;
  width: 40%;
  margin: auto;
  display: block;
  padding: 14px 14px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

</style>
<body>
<img src="grr.png" align="right" width="450" height="500">
<div class = "container">

<?php

$population_a = 0;
$population_rate_a = 0;
$population_b = 0;
$population_rate_b = 0;
$years = 0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 	if(isset($_POST["city_population"]))
	{
		$population_a = $_POST["city_a"];
		$population_rate_a = $_POST["city_a_rate"] / 100;
		$population_b = $_POST["city_b"];
		$population_rate_b = $_POST["city_b_rate"] / 100;
		
		if($population_rate_b >= $population_rate_a)
		{
			echo "Growth rate of City B cannot be EQUAL or HIGHER than growth rate of City A";
		}
		else
		{
		  if($population_a >= $population_b)
		  {
			  echo "Population in City A cannot EQUAL or Higher than Population in City B";
		  }
		  else
		  {
			  for($x = 0; $population_a < $population_b; $x++)
			  {
				  $city_a = (int)$population_a;
				  $population_a = $city_a + ($city_a*$population_rate_a);
				  $city_b = (int)$population_b;
				  $population_b = $city_b + ($city_b*$population_rate_b);
				  $years++;
			  }
			  
			  echo "City A Population : ".$_POST["city_a"]."<br>";
			  echo "City A Growth Rate : ".$_POST["city_a_rate"]."<br>";
			  echo "City B Population : ".$_POST["city_b"]."<br>";
			  echo "City B Growth Rate : ".$_POST["city_b_rate"]."<br><br>";
			  
			  
			  echo "City A : ".number_format($population_a)."<br>";
			  echo "City B : ".number_format($population_b)."<br>";
			  echo "<br>The population of City A will be greater than or the same City B in ".$years." years.";
		  }
		}
	}
}
?>
<br><br>
<form action="city_pop.php" method="post">
	<input type="submit" value="Go Back">
</form>

</div>
</body>
</html>