<?php 
include('config.php');
include('./includes/header.php'); ?>

<main>

<h2>Welcome to our daily page!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales finibus quam a iaculis.
     Quisque non vehicula metus, at rutrum velit. Donec vel pulvinar mi. Maecenas et tellus ultrices, ornare arcu sit amet, 
     aliquam tortor. </p>

<?php

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}




switch($today) {
    case 'Friday' :
        $food = '<h2>Friday is our vegetarian day!</h2>';
        $pic = 'salad.jpg';
        $alt = 'vegan';
        $content = '<p> <b>Vegan food is</b> A vegan diet is based on plants (such as vegetables, grains, nuts and fruits) 
        and foods made from plants. Vegans do not eat foods that come from animals, including dairy products and eggs..</p>';
       break;

    case 'Saturday':
        $food = '<h2>Saturday is our steak day!';
        $pic = 'steak.jpg';
        $alt = 'Steak';
        $content = '<p>A steak is a thick cut of meat generally 
        sliced across the muscle fibers, sometimes including a bone. 
        It is normally grilled or fried. Steak can be diced, cooked 
        in sauce, such as in steak and kidney pie, or minced and 
        formed into patties, such as hamburgers.</p>';
        break;
    

    case 'Sunday' :
            $movie = '<h2>Sunday is Enjera Day!</h2>';
            $pic = 'ethio.jpg';
            $alt = 'Enjera';
            $content = '<p> <b>Injera is </b>a sour fermented pancake-like flatbread with a slightly spongy texture, traditionally made of teff flour. 
            In Ethiopia, Eritrea, and some parts of .</p>';
            break;

    case 'Monday' :
        $movie = '<h2>Monday is PastaDay!</h2>';
        $pic = 'pasta.jpg';
        $alt = 'Pasta';
        $content = '<p> <b>Pasta is </b>Pasta is a type of food typically 
        made from an unleavened dough of wheat flour mixed with water or eggs, 
        and formed into sheets or other shapes, 
        then cooked by boiling or baking .</p>';
        break;
    
    case 'Tuesday' :
        $movie = '<h2>Tuesday is soup Day!</h2>';
        $pic = 'soup.jpg';
        $alt = 'Soup';
        $content = '<p> <b> soup is </b>a liquid food especially with a meat, fish, or vegetable stock as a base and 
        often containing pieces of solid food</p>';
        break;

    case 'Wednesday' :
        $movie = '<h2>Wednesday is salmon Day!</h2>';
        $pic = 'salmon.jpg';
        $alt = 'Salmon';
        $content = '<p> <b> Salmon is</b> the common name for several commercially important species of euryhaline 
        ray-finned fish from the family Salmonidae</p>';
        break;
    
    case 'Thursday' :
        $movie = '<h2>Thursday is Tacos day!</h2>';
        $pic = 'tacos.jpg';
        $alt = 'Tacos';
        $content = '<p> <b>tacos is  </b>A traditional 
        Mexican food consisting of a small hand-sized corn- 
        or wheat-based tortilla topped with a filling. The 
        tortilla is then folded around the 
        filling and eaten by hand.</p>';
        break;

    }
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<body class="<?php echo $body ;?>">

<div id="wrapper">
<h1></h1>
<?php 

?>

<?php echo $content; ?>





     
     <ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.phptoday=Saturday">Saturday</a></li>
</ul>
</div>

</main>

<aside>
<img src="./image/<?php echo $pic;?>" alt="<?php echo $alt;?>">
  
    
</aside>
<?php include('./includes/footer.php'); ?>

</div>
<!--end wrapper--->
    
</body>
</html>


