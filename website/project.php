<?php
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
<main>

<h1> Welcome to our Project Page!</h1>
<?php


$sql = 'SELECT * FROM country';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));



//we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {


    while($row = mysqli_fetch_assoc($result)) {

        echo ' 
        <h2>Information about: '.$row['country_name']. '</h2>
        <ul>
        <li><b>Country Nam:e</b> '.$row['Country_name']. '</li>
        <li><b>Country Cod:e</b> '.$row['country_code']. '</li>
    
        </ul>


        <p>For more information about'.$row['country_name'].', click <a href="project-view.php?id='.$row['country_id'].' ">here</a></p>
        ';

    } // end while 


} //end if number of row is greater than 0

echo 'Nobody is home!'; {
}

@mysqli_free_result($result);

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