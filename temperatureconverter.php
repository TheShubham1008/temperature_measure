<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Mulish:wght@200&family=Roboto+Slab&display=swap" rel="stylesheet">
	<style>
		*{
			margin: 0;padding: 0;box-sizing: border-box;
			font-family: 'Mulish', sans-serif;
		}
		h1{
			text-align: center;line-height: 20vh;color:#00ce10;font-weight: bold;font-size: 32px;
		}
		.main-div{
			width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.left-side{
			background-color: #e2eef9;
			border-radius: 53% 47% 82% 18% / 13% 39% 61% 87%;

		}
		.left-side img{
			max-width: 600px;
			height: auto;
		}
		.right-side{
			width: 400px;
			height: 300px;
			background-color: 	#e4f5de;
			border-radius: 15px;
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		.input1{
			width: 250px;
			height: 40px;
			padding: 5px;
			outline: none;
			border-radius: 1px solid grey;
			border-radius: 5px;
		}
		.selection{
			width: 100%;
			margin: 20px 0;
			text-emphasis-color: #00ce10;
		}
		.btn{
			padding: 10px 29px;
			border-radius: 5px;
			outline: none;
			border: none;
			background-color: #00ce10;
			color: white;
			font-size: 0.9rem;
		}
	</style>
</head>
<body>
<header>
	<h1>Temperature Conversion</h1>
	<div class="main-div">
		<div class="left-side">
			<img src="img\alpha.png">
			
		</div>
		<div class="right-side">
			<form method="POST">
				<input type="text" name="num" placeholder="Enter The Temperature"
				 class="input1">
				<div class="selection">
					<label> Calcius</label>
					<input type="radio" name="units" value="cel">
				     &nbsp &nbsp
					<label> Frenheit</label>
					<input type="radio" name="units" value="fer">
				</div>
				<input type="submit" name="submit" value="Convert Now" class="btn">
			</form>
			<div>
				<p>
					<?php

					if(isset($_POST['submit'])){
						$num=$_POST['num'];
						$temp=$_POST['units'];
						if ($temp=="cel") {
							$result=$num*9/5+32;
							echo $result;
						}
						else if($temp=="fer"){
							$result=($num-32)*5/9;
							echo $result;
						}
						else{
							echo "hahaha";
						}
					}

					?>
				</p>
			</div>
		</div>
	</div>

</header>


</body>
</html>