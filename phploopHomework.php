<?php
echo "Array: <br>\n";
$arr= [40,41,42,43,44,45,46,47,48,49,50];
foreach($arr as $num)
{
echo "$num <br>\n";
}
echo "The even numbers are:<br>\n";
foreach($arr as $num)
{
if($num % 2==0)
    {
    echo "$num <br>\n";
    }
}
?>
