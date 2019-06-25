
<?php
 
 echo"<P>  Hi please use this code to  active  your account </p> ";
 
$digits = 4;
echo rand(pow(10, $digits-1), pow(10, $digits)-1);
?>