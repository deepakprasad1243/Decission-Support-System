.<?php
$root="";
$back_slash = 
    substr_count(getcwd(),'\\')-3;
while($back_slash!=0)
{
    $root=$root.'../';
    $back_slash--;
}

?>
<?php include $root . 'header.php'; ?>