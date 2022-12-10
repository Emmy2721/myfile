<html>
<head>
<title>My Adder</title>

</head>
<body>

<h1>Adder php</h1> 
<form action="" method="POST">

	
	Enter the first number:</label>
	<input type="text" name="num1"><br>

	
	</label>Enter the second number:
	<input type="text" name="num2"><br>

	
	<input type="submit" value="submit" name="submit"> 
</form>

	

<?php   

	/*  */
	//i change num1 to submit on line 29//
	if (isset($_POST['submit']))
	{

		/* noting change */
		$num1 = $_POST['num1'];
		/* nothing change */		
		$num2 = $_POST['num2'];

		/* noting change */		
		$myTotal = $num1 + $num2;

		/*  */
		//i added one quote after double quote on line42//
		echo '<h2>You added "'. $num1 .'" and "'.$num2.'"';

		/* i removed br tag and replace by closing p tag on line46 */	
			
		echo ' <p> and the answer is </p>
		<p style="color:red;">"'. $myTotal .'!"</p>';

		/* i replace open style tag by p tag and put 2 dots between argument  on line47 */
		echo'<p><a href="">Reset page</a>';
		// i place doublequote online 50//

	}

?>

</body>
</html>
