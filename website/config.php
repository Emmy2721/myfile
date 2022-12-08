<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our website Project';
    $body = 'home';
    break;

    case 'about.php' :
        $title = 'About page of our website Project';
        $body = 'about inner';
        break;


     case 'daily.php' :
         $title = 'Daily page of our website Project';
         $body = 'daily inner';
         break;

     case 'project.php' :
          $title = 'Project page of our website Project';
          $body = 'project inner';
          break;


    case 'contact.php' :
          $title = 'Contact page of our website Project';
          $body = 'contact inner';
           break;   
           
           
    case 'gallery.php' :
          $title = 'Gallery page of our website Project';
          $body = 'Gallery inner';
          break;
    }


// our navigational array!

$nav = array(
'index.php' => 'Home',
   'about.php' => 'About',
   'daily.php' => 'Daily',
  'project.php' => 'Project',
  'contact.php' => 'Contact',
'gallery.php' => 'Gallery',

);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .='<li><a class="current" href="'.$key.'">
            '.$value.'</a> </li>';

} else {
$my_return .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';
}
} //end foreach
return $my_return;
}

//     } // end foreach

// this is the beginning of the switch for homework 3!!!

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

<?php

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$wines = '';
$gender = '';
$regions = '';
$privacy = '';
$comments  = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$wines_err  = '';
$gender_err  = '';
$regions_err  = '';
$privacy_err  = '';
$comments_err = '';





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

        if(empty($_POST['gender'])) {
            $gender_err = 'Please choose your gender';
            } else {
                $gender = $_POST['gender'];
            }
            
         if(empty($_POST['phone'])) {
            $phone_err = 'Please fill out your phone number';
            } else {
                $phone = $_POST['phone'];
            }

                     
        if(empty($_POST['wines'])) {
            $wines_err = 'what, no wines?';
           } else {
               $wines = $_POST['wines'];        
           }
                   
                
        if(empty($_POST['comments'])) {
             $comments_err = 'Please share your thoughts with us ';
            } else {
                $comments = $_POST['comments'];        
            }
                    
            if(empty($_POST['privacy'])) {
                $privacy_err = 'Please agree to our privacy policy';
               } else {
                   $privacy = $_POST['privacy'];        
               }

         if($_POST['regions'] == NULL) {
             $regions_err = 'Please select your region!';

            } else {
           $regions = $_POST['regions'];
            }
// wines function

            function my_wines($wines) {
             $my_return= '';


           if(!empty($_POST['wines'])) {
           $my_return = implode(', ', $_POST['wines']);

            }else{
            $wines_err = 'Please fill out your wines!';

            }

           return $my_return;

            }


}//end 

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {


$to = 'emubirhanu6@gmail.com';
$subject = 'Test Email on ' .date('m/d/y h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Regions: '.$regions.' '.PHP_EOL.'
Wines: '.my_wines($wines).' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';


$headers = array(
'From' => 'noreply@gmail.com'
);

if(!empty($first_name  &&  
$last_name && 
$email && 
$gender && 
$phone && 
$regions && 
$wines  &&  
$comments)) {





mail($to, $subject, $body, $headers);
header('Location:thx.php');

} //end isset

}

?>
