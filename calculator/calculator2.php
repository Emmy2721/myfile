<!DOCTYPE html>
<html>
    <head>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
   <body>
      <form action="/new.php">
        
        
      </form>
   
<form action="<?php echo $_SERVER['PHP_SELF'] 
;?>" method="post">
<fieldset>


<label>NAME</label>
<input type="text" name="name">

<label>Total Mile Driving</label>
<input type="miles" name="miles">

<label>How fast do you typically drive?</label>
<input type="price" name="price">

<label>How many hours per day do you plan to driving?</label>
<input type="efficiency" name="efficiency">

<!--time for our radio button that has an additional attribute of value -->

<label>Price of Gas</label>

<ul>
<li><input type="radio" name="price" value=""> $3.50 </li>
<li><input type="radio" name="price" value=""> $3.50 </li>
<li><input type="radio" name="price" value=""> $4.00 </li>


</ul>

<ul>

<label>Fuel efficiency</label>
</ul>
<select name="Gas">
<option value="" NULL>Select one!</option>
<option value="Great @ 40mpg" >Great @ 40mpg</option>
<option value="Great @ 60mpg" >Great @ 60mpg</option>
<option value="Great @70mpg" > Great @ 70mpg</option>

</select>

<input type="submit" value="Submit">
        

<p><a href="">Reset!</a></p>
</fieldset>
</form>


<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {


if(empty($_POST['name'] &&
$_POST['miles'] &&
$_POST['price'] &&
$_POST['efficiency'])) {
    $num1 = $_POST["miles"];
    $num2 = $_POST["price"];
    $operation = $_POST["efficiency"];

echo '<p class="error">Please fill out your Name</p>';
echo '<p class="error">please fill out your total driving miles</p>';
echo '<p class="error">Please fill out how fast will you be driving</p>';
echo '<p class="error">How many hours per day would you like to drive?</p>';
echo '<p class="error">Your coast of gas, please!</p>';
echo '<p class="error">Please select your cars efficiency</p>';




} elseif (isset($_POST['name'],
$_POST['miles'],
$_POST['price'],
$_POST['efficiency '])) {
$name = $_POST['name'];
$email = $_POST['miles'];
$amout = $_POST['price'];
$currency = $_POST['efficiency'];
$dollars = $price * $efficiency;



echo '

<div class="box">
<h2>Hello  '.$name.' </h2>
<p>You now have <b> $'.floor($dollars).' American dollars</b> we will be emailing you '.$email.' with your information!</p>

</div>

';
}


}




?>
</body>
</html>