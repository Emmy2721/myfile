<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>    
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
   
<fieldset>
<label>Name</label>   
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

<label>Total miles driving?</label>
<input type="number" name="milage" value="<?php if(isset($_POST['milage'])) echo htmlspecialchars($_POST['name']);?>">

<label>How fast do you typically drive?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hour" value="<?php if(isset($_POST['hour'])) echo htmlspecialchars($_POST['hour']);?>">

<label>Price of gas</label>
<ul>
<li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked=“checked" ' ;?> > $3.00 </li>
<li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked=“checked" ' ;?> > $3.50 </li>
<li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked=“checked" ' ;?> > $4.00 </li>
</ul>

<label>Fuel efficiency</label>
<select name="fuel">
<option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel']==NULL) echo 'selected="unselected"';?>>Select one!</option>
<option value="40.00" <?php if(isset($_POST['fuel']) && $_POST['fuel']== '40.00') echo 'selected="selected"';?>>Great @ 40mpg</option>
<option value="10.00" <?php if(isset($_POST['fuel']) && $_POST['fuel']== '10.00') echo 'selected="selected"';?>>Terrible @ 10mpg</option>

</select>

<input type="submit" value="Calculate">

<p><a href="">Reset it!</a></p>
</fieldset>
</form>
<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(empty($_POST['name'])){
    echo '<p class=“error”>Please fill out your name!</p>';
    }
    if(empty($_POST['milage'])){
        echo '<p class="error">Please fill out your driving miles!</p>';
     }
     if(empty($_POST['speed'])){
        echo '<p class="error">Please fill out how fast you will be driving!</p>';
        }
      if(empty($_POST['hour'])){
        echo '<p class="error">How many hours per day would you like to drive?</p>';
        }
      if(empty($_POST['price'])){
        echo '<p class="error">Your cost of gas, please!</p>';
        }
      if(empty($_POST['fuel'])){
        echo '<p class=“error”>Please select your gas efficiency!</p>';
        }
      }

      if(isset($_POST['name'],
      $_POST['milage'],
      $_POST['speed'],
      $_POST['price'],
      $_POST['hour'],
      $_POST['fuel']))
      {
      $name = $_POST['name'];
      $milage = floatval($_POST['milage']);
      $speed = floatval($_POST['speed']);
      $hour = floatval($_POST['hour']);
      $price = floatval($_POST['price']);
      $fuel = floatval($_POST['fuel']);
      }
      if ($speed != 0 && $hour != 0 && $fuel != 0){
      $total_hours = $milage / $speed;
      $total_days = $total_hours / $hour;
      $total_gallons = $milage / $fuel;
      $total_cost = $price * $total_gallons;
      }
      
       
       
      if(empty($name && $milage && $speed && $hour && $price && $fuel)){
      } echo '
       
      <div class="box"style="background-color:red;width:300px>
       
      <P style="color:red;text-align:left">Hello '.$name.', You will be travelling a total of
      '.number_format($total_hours,2).' hours, taking '.number_format($total_days,2).' days <br> And,
      you will be using '.number_format($total_gallons,0).' gallons of gas, costing you '.number_format($total_cost,0).' dollars</p>
      </div>
      ';
       
       
      ?>
      </body>
      </html>