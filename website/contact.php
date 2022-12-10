<?php 
include('config.php');
include('./includes/header.php');?>




     <?php
     include('./includes/form.php'); 
     ?>
<h3> Welcome to Our Contact Page!</h3>

<?php
ob_start();
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$sports = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$sports_err  = '';
$privacy_err  = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your first name '; 
        } else {
            $first_name = $_POST['first_name'];
        }
   


        if(empty($_POST['last_name'])) {
            $last_name_err = 'Please fill out your last name '; 
            } else {
                $last_name = $_POST['last_name'];
            }


            if(empty($_POST['email'])) {
                $email_err = 'Please fill out your email so that we can span you! '; 
                } else {
                    $email = $_POST['email'];
                }

       
            
        //  if(empty($_POST['phone'])) {
        //     $phone_err = 'Please fill out your phone number';
        //     } else {
        //         $phone = $_POST['phone'];
        //     }


        if(empty($_POST['phone'])) { // if empty, type in your number
            $phone_err = 'Your phone number please!';
            } elseif(array_key_exists('phone', $_POST)){
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
            } else{
            $phone = $_POST['phone'];
            } // end else
            } // end main if
                     


        if(empty($_POST['sports'])) {
            $sports_err = '';
           } else {
               $sports = $_POST['sports'];        
           }
                   
            
                    
            if(empty($_POST['privacy'])) {
                $privacy_err = 'Please agree to our privacy policy';
               } else {
                   $privacy = $_POST['privacy'];        
               }

        
// wines function

            function my_sports($sports) {
             $my_return= '';


           if(!empty($_POST['sports'])) {
           $my_return = implode(', ', $_POST['sports']);

            }else{
            $sports_err = 'Please fill out your Favorite Sports!';

            }

           return $my_return;

            }


}//end 

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['sports'],
$_POST['privacy'])) {


$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email on ' .date('m/d/y h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'

Phone: '.$phone.' '.PHP_EOL.'

Wines: '.my_sports($sports).' '.PHP_EOL.'

';


$headers = array(
'From' => 'noreply@gmail.com'
);

if(!empty($first_name  &&  
$last_name && 
$email && 
$phone && 
$sports) &&  

preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

     mail($to, $subject, $body, $headers);
     header('Location:thx.php');

} //end isset

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable Form</title>
    <style>

/* Styles for my currency form! */

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.inner-header {
    max-width: 1000px;
    margin:0px auto;
    justify-content: center;
}

h3 {
    text-align: center;
    
}

body {
    background-color:beige;
}

form {
    width: 400px;
    margin: 20px auto;

}


label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 1.2em;
    
}


input[type=text],
input[type=email],
input[type=tel] {
    display: block;
    height: 30px;
    width: 100%;
    margin-bottom: 10px;
}


input[type=submit]{
    display: block;
    margin-bottom: 10px;
}

form ul {
    margin-bottom: 10px;
    list-style: none;
}

.box {
    width: 400px;
    padding: 10px;
    margin:0 auto;

}


aside {
    width: 50%;
    float: right;
    margin-left: 50px;
}


.error {
    display: block;
    color: red;
    margin-bottom: 8px;
}

 </style>



</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER
['PHP_SELF'])   ;?>" method="post">

<fieldest>
    <legend>Contact Emmy</legend>


    <label>First Name</label>
    <input type="text" name="first_name" value="<?php  if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ;?>">
    <span class="error"><?php echo $first_name_err ;?></span>

    
    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php  if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ;?>">
    <span class="error"><?php echo $last_name_err ;?></span>

    <label>Email</label>
    <input type="email" name="email" value="<?php  if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ;?>">
    <span class="error"><?php echo $email_err ;?></span>


    
  <label>Phone</label>
 <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php  if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])   ;?>">
 <span class="error"><?php echo $phone_err ;?></span>

 <label>Favorite Sports</label>

 <ul>

 <li>
 <input type="checkbox" name="sports[]" value="atletics"  <?php if(isset($_POST['sports'])  && in_array('atletics', $sports))echo 'checked = "checked"' ;?>>Atletics
</li>

<li>
 <input type="checkbox" name="sports[]" value="football"  <?php if(isset($_POST['sports'])  && in_array('football', $sports))echo 'checked = "checked"';?>>Football
</li>

<li>
 <input type="checkbox" name="sports[]" value="golf"  <?php if(isset($_POST['sports'])  && in_array('golf', $sports)) echo 'checked = "checked"';?>>Golf
</li>

<li>
 <input type="checkbox" name="sports[]" value="basketball"  <?php if(isset($_POST['sports'])  && in_array('basketball', $sports))echo 'checked = "checked"' ;?>>Basketball
</li>


<span class="error"><?php echo $sports_err ;?></span>



<label>Privacy</label>

<ul>
        <li>
    <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])  && $_POST['privacy'] == 'privacy'  )   echo 'checked = "checked" '  ;?> >Privacy
  </li>
  </ul>
  <span class="error"><?php echo $privacy_err ;?></span>
<input type="submit" value="Send it!">

<p><a href="">Reset it!</a></p>

</fieldest>
</form>


</main>




</div>
<!--end wrapper--->
    
</body>
</html>


