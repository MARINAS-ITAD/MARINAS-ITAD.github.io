<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=IBM+Plex+Mono:ital,wght@0,400;1,700&family=Josefin+Sans:wght@200;400&family=Righteous&display=swap" rel="stylesheet">
<body>
	
<style>	
input[type=number], select, textarea {
  width: 35%;
  height:30px;
  margin: auto;
  display: block;
  padding: 5px;
  position: relative;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 5px;
  margin-bottom: 5px;
  resize: vertical;
  
}

input[type=submit] {
  text-align: center;
  background-color: #cf352e;
  color: white;
  font-size: 1.125em;
  width: 80%;
  margin: auto;
  display: block;
  padding: 14px 14px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #A9A9A9;
}

.container {
  font-size: 16px;
  font-family: Helvetica;
  word-spacing: 1 em;
  max-width: 500px;
  margin: auto;
  margin-top: 60px;
  border: 5px solid #cf352e;
  background: white;
  padding: 10px;
  border-radius: 5px; 
}
.center{
  
  font-size: 16px;
  font-family: 'Righteous', cursive;;
  word-spacing: 1 em;
  margin: 0 auto;
  width:500px;
}

h2 {
  font-family: 'IBM Plex Mono', monospace;
  font-size: 29px;
  text-align: center;
  border-bottom-color: #cf352e;
  border-bottom-style: solid;
  border-bottom-width: medium;
}
body {
  background:#F5F5F5;
}



label
{
  float: left;
  width: 10em;
  margin-right: -5.1em;
  margin-left: 5.1em;
}
img{
	display: inline;
}


  
 
	</style>
	<img src="php.png" align="left" width="300" height="500" >
	<img src="grr.png" align="right" width="400" height="500">
	<div class = "container">
	<h2><b>City Population</b></h2>
	<br>
	<div class = "center">
	<form action="city_pop_compu.php" method="post">
	<label for="city_a">City A Population</label>
	<input type="number" placeholder="City A Population" name="city_a">
	<br /><br />
	<label for="city_a_rate">City A Growth Rate</label>
	<input type="number" placeholder="City A Growth Rate" name="city_a_rate">
	<br />
	<br />
	<label for="city_b">City B Population</label>
	<input type="number" placeholder="City B Population" name="city_b">
	<br />
	<br />
	<label for="city_b_rate">City B Growth Rate</label>
	<input type="number" placeholder="City A Growth Rate" name="city_b_rate">
	<br />
	<br />
	<input type="submit" name="city_population" value="Evaluate">
</form>
</div>
</div>
</body>
</html>
