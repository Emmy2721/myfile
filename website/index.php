<?php 
include('config.php');
include('./includes/header.php'); ?>
<div id="wrapper">


<div id="hero">
<img src="image/twelve.jpg" alt="Twelve is greater than 3">


<!--end hero-->
</div>

<main>
<h1>Welcome to our Web App Programming Class!</h1>
<h2>We are going to learn PHP!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales finibus quam a iaculis.
     Quisque non vehicula metus, at rutrum velit. Donec vel pulvinar mi. Maecenas et tellus ultrices, ornare arcu sit amet, 
     aliquam tortor. 
     Vestibulum eget dui tortor. Fusce fringilla nisl non metus lobortis posuere. Aliquam finibus tincidunt neque, 
     eget laoreet massa vehicula ac. Aliquam aliquet arcu at sem pharetra, ut varius enim condimentum.</p>
<p>Integer quis nisi quis arcu mattis imperdiet placerat in tellus. 
    Pellentesque at leo tincidunt, ultricies felis quis, porttitor justo. 
    Praesent id consectetur libero, in aliquet nibh. Donec scelerisque sem purus, 
    sit amet vulputate velit vehicula ut. </p>
</main>

<aside>
<?php

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


$i = rand(0, 4);

$selected_image =''.$photos[$i].'.jpg';
echo '<img src="image/'.$selected_image. ' " alt="'.$photos[$i].'" >';


function random_images($photos) {
$my_return = '';    
$i = rand(0, 4);
$selected_image =''.$photos[$i].'.jpg';
$my_return = '<img src="image/'.$selected_image. ' " alt="'.$photos[$i].'" >';
return $my_return;

} //end function


echo random_images($photos);





?>












<h3>This is our headline three in our beautifull aside</h3>
    <p>Nunc ullamcorper justo at pellentesque molestie. 
        Curabitur ac eleifend ante. Fusce at mattis felis, eget posuere leo. 
        Aliquam rutrum massa finibus sem dapibus, quis eleifend sem finibus. Curabitur vel mollis metus, 
        in elementum leo.</p>

</aside>


</div>
<!---end wrapper-->

<?php
include('./includes/footer.php');