<?php
$zufall = md5(uniqid(rand(), true));
echo "<pre>";
echo "FILES:<br>";
print_r ($_FILES );
echo "</pre>";
$y = 1;
$z = 0;
if (( $_FILES['uploaddatei']['name']  <> "" ) and (
(int)$_POST["number"] == (int)file_get_contents('code/code.txt'))) { do
{   if ( $z % 4 == 0 ) { $y = $y + 5; }
	elseif ( $z % 4 == 1 ) { $y = $y * 1.2; }
	elseif ( $z % 4 == 2 ) { $y = $y + 4; }
	elseif ( $z % 4 == 3 ) { $y = $y + 1; };
	$z++;
} while ( $y < (int)file_get_contents('code/code.txt') );
if ( $z % 5437 == 0 ) 
{
    // Datei wurde durch HTML-Formular hochgeladen
    // und kann nun weiterverarbeitet werden
    move_uploaded_file (
         $_FILES['uploaddatei']['tmp_name'],'hochgeladenes_public/'. $zufall$_FILES['uploaddatei']['name'] );
 
    echo "<p>Hochladen war erfolgreich: ";
    echo '<a href="hochgeladenes_public/'. $zufall$_FILES['uploaddatei']['name'] .'">';
    echo 'hochgeladenes_public/'. $zufall$_FILES['uploaddatei']['name'];
    echo '</a>';
}}
if (( $_FILES['uploaddatei']['name']  <> "" ) and (
(int)$_POST["number"] == (int)file_get_contents('code/code.txt')))
{
    // Datei wurde durch HTML-Formular hochgeladen
    // und kann nun weiterverarbeitet werden
    move_uploaded_file (
         $_FILES['uploaddatei']['tmp_name'] ,
         'hochgeladenes_not_5437th_number_not_public_here/'. $zufall$_FILES['uploaddatei']['name'] );
 
    echo "<p>Hochladen war erfolgreich: ";
    echo '<a href="hochgeladenes_not_5437th_number_not_public_here/'. $zufall$_FILES['uploaddatei']['name'] .'">';
    echo 'hochgeladenes_not_5437th_number_not_public_here/'. $zufall$_FILES['uploaddatei']['name'];
    echo '</a>';
}
if ( $_FILES['uploaddatei']['name']  <> "" )
{
    // Datei wurde durch HTML-Formular hochgeladen
    // und kann nun weiterverarbeitet werden
    move_uploaded_file (
         $_FILES['uploaddatei']['tmp_name'] ,
         'hochgeladenes_not_public_here/'. $zufall$_FILES['uploaddatei']['name'] );
 
    echo "<p>Hochladen war erfolgreich: ";
    echo '<a href="hochgeladenes_not_public_here/'. $zufall$_FILES['uploaddatei']['name'] .'">';
    echo 'hochgeladenes_not_public_here/'. $zufall$_FILES['uploaddatei']['name'];
    echo '</a>';
} 
$nextcalc = (int)file_get_contents('calc/calc.txt');
if ( $nextcalc == 1 ) { $newcode = (int)file_get_contents('code/code.txt') + 5; $newcalc = 2; }
elseif ( $nextcalc == 2 ) { $newcode = (int)file_get_contents('code/code.txt') * 1.2; $newcalc = 3; }
elseif ( $nextcalc == 3 ) { $newcode = (int)file_get_contents('code/code.txt') + 4; $newcalc = 4; }
elseif ( $nextcalc == 4 ) { $newcode = (int)file_get_contents('code/code.txt') + 1; $newcalc = 1; };
file_put_contents("code/code.txt", $newcode);
file_put_contents("calc/calc.txt", $newcalc);
?>