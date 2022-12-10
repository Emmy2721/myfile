
<?php 
include('config.php');
include('./includes/header.php');?>

<?php
$mountain['MountFuiji']= 'fuijj_mount.';
$mountain['kirkjufell'] = 'kirkj_Kirkjufell.';
$mountain['MountEverest'] = 'mount.';
$mountain['Tablemoun'] = 'table.';
$mountain['Aorakimoun'] = 'aorak.';

// variable key and value
// $name       the value is $image
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>

        table {
            border:1px solid red;
            border-collapse:collapse;
        }

        body {
    background-color: beige;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
        td img {
            border:1px solid red;
            max-width: 30%;
        }
    
        </style>

        
</head>
<body>
 <table>
<?php foreach($mountain as $name => $image)          :?>
<tr>

<td><img src="image/<?php echo substr($image, 0, 5);?>.JPG" alt="<?php  echo str_replace('_', ' ', $name)  ;?> "> </td>

<td><?php echo str_replace('_', ' ', $name)   ;?></td>



</tr>

<?php endforeach; ?>

</table>
</body>
</html>