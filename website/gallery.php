<?php
$animal1['Donald_Trump'], = 'trump_Former President from NY.';
$animal2['Joe_Biden'] = 'biden_President from PA.';
$animal3['Hilary_Clinton'] = 'clint_Secretary from NY.';
$animal4['Bernie_Sanders'] = 'sande_Senator from VT.';

$animal5['Kamala_Harris'] = 'harri_Vice President from CA.';



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

        td {
            border:1px solid red;
        }
    
        </style>
</head>
<body>
 <table>
<?php foreach($people as $name => $image)          :?>
<tr>

<td><img src="image/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php  echo str_replace('_', ' ', $name)  ;?> "> </td>

<td><?php echo str_replace('_', ' ', $name)   ;?></td>
<td></td>


</tr>

<?php endforeach; ?>

</table>
</body>
</html>