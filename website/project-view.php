<?php

include('conf.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location:project.php');

}

//we wil now select from the table where the people id =id

$sql = 'SELECT * FROM country WHERE country_id = '.$id. ' ';


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {

    $country_name = stripcslashes($row['country_name']);
$country_code = stripcslashes($row['country_code']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
$feedback = '';

} //close while statment

} else { //end if statemnt

$feedback = 'There is a problem!!';


} //end else

include('./includes/header.php'); 
?>
<div id="wrapper">
<main>
<h1>Welcome yo our People View Page!</h1>
<h2>Introducing you to <?php echo $first_name ;?>'s Page</h2>
<ul>
<?php
echo '
<li><b>Country Name: </b>'.$country_name.'</li>
<li><b>Contry Code: </b>'.$country_code.'</li>
<li>
<p>'.$details.'</p>
</li>
';
?>
</ul>

<p><a href="project.php">Return to the people page!</a></p>
</main>
<aside>
<h3>This is my Aside</h3>
<figure>
<img src="./image/country<?php echo $id; ?>.jpg" alt="<?php echo $country_name  ;?>">
<figcaption>
<?php
echo '
'.$country_name.' '.$country_code.' 
';
?>
</figcaption>
</figure>

<p><i><?php
echo $blurb;

?></i></p>
</aside>
<?php
// we are going to release the server 

@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);

?>

</div>
<!--end wrapper-->
<?php 
include('./includes/footer.php');