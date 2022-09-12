
<?php

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$ef = $_POST['ef'];
$tf = $_POST['tf'];


 $resultado = (((($p1 + $p2 + $p3)/3)*0.35 ) + ($ef *0.35) + ($tf *0.30));

echo '<center>'. '<h1>' . "Su nota final es:"  . " "  . $resultado . "<br>" . '</h1>' . '</center>' ;

if ($resultado >= 3)  {
echo '<center>'.'<h1>' . "Aprobó" . '</h1>' . '</center>' ;
} else {
echo '<center>'.'<h1>' . "No aprobó" . '</h1>' . '</center>';
}

