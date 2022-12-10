<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 form with drop down (select and option)</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] 
;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="name" name="name">

<label>Total Mile Driving</label>
<input type="number" name="fnum" placeholder="First Number" class="form-control">

<label>How fast do you typically drive?</label>
<input type="number" name="snum" placeholder="First Number" class="form-control">

<label>How many hours per day do you plan to driving?</label>
<input type="number" name="num3"placeholder="First Number" class="form-control">

<label>Price of Gas</label>

<ul>
<li><input type="radio" name="name" value="3:00"> $3:00 </li>
<li><input type="radio" name="currency" value="3.50"> $3.50</li>
<li><input type="radio" name="currency" value="4.00"> $4:00 </li>
</ul>


<ul>

<label>Fuel efficiency</label>
</ul>
<select name="Gas" class="form-control">
<option value="" NULL>Select one!</option>
<option value="*" ></option>
<option value="*" ></option>
<option value="*" > </option>

</select>

<input type="submit" value="Submit">
        

<p><a href="">Reset!</a></p>
</fieldset>
</form>


<?php

if(isset($_POST['submit'])){
$result1 = $_POST['fnum'];
$result2 = $_POST['sunm'];
$calculator = $_POST['gas'];

}





?>
</body>
</html>