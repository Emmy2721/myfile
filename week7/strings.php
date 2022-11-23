<?php    
//our str_replace and substr functions!
// subster(string,start,length)

$statement = 'Presently, I am reading the Looming Tower';
echo $statement ;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 11);
echo '<h2>Now, I would like to display just te words - I am reading</h2>';
echo '<br>';
echo substr($statement, 11, 12);
echo '<h2>What if I would like to display Looming?</h2>';
echo substr($statement, -13, 8);
echo '<br>';
echo substr($statement, 4, 11);
echo '<br>';
echo substr($statement, -20, 2);
echo '<br>';
echo '<h2>Now fir the str_replace function!</h2>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!';

echo str_replace('the ', 'The', $statement2);