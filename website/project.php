<?php
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
<main>

<h1> Welcome to our Project Page!</h1>
<?php
$sql = 'SELECT * FROM people';

//$iConn = mysqli_connect(DB_NAME, DB_USER, DB_PASSWORD, DB_HOST) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));



//we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
//we will be reading those rows with a wile loop 
while($row = mysqli_fetch_assoc($result)) {

echo ' 
<h2>Information about: '.$row['first_name']. '</h2>
<ul>
<li><b>First Nam:e</b> '.$row['first_name']. '</li>
<li><b>First Nam:e</b> '.$row['last_name']. '</li>
<li><b>First Nam:e</b> '.$row['birthdate']. '</li>
</ul>

<p>For mote information about'.$row['first_name'].', click <a href="pro.php?id='.$row['people_id'].' ">here</a></p>
';
} // end while 



} //end if number of row is greater than 0

echo 'Nobody is home!'; {
}

// we are going to release the server 

@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);

?>

</main>
<aside>
<h3>I will display my randon images here!</h3>

</aside>
</div>

<!--end wrapper-->
<?php 
include('./includes/footer.php');
