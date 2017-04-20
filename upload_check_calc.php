<?php
echo "<pre>";
echo "FILES:<br>";
print_r ($_FILES );
echo "</pre>";
if ( $_FILES['uploaddatei']['name']  <> "" ) && ( (int)$_POST["number"] == (int)trim(file_get_contents('code/code.txt'));
{
    // Datei wurde durch HTML-Formular hochgeladen
    // und kann nun weiterverarbeitet werden
    move_uploaded_file (
         $_FILES['uploaddatei']['tmp_name'] ,
         'hochgeladenes/'. $_FILES['uploaddatei']['name'] );
 
    echo "<p>Hochladen war erfolgreich: ";
    echo '<a href="hochgeladenes/'. $_FILES['uploaddatei']['name'] .'">';
    echo 'hochgeladenes/'. $_FILES['uploaddatei']['name'];
    echo '</a>';
}
else
{
if ( $_FILES['uploaddatei']['name']  <> "" )
{
    // Datei wurde durch HTML-Formular hochgeladen
    // und kann nun weiterverarbeitet werden
    move_uploaded_file (
         $_FILES['uploaddatei']['tmp_name'] ,
         'hochgeladenes_not_public_here/'. $_FILES['uploaddatei']['name'] );
 
    echo "<p>Hochladen war erfolgreich: ";
    echo '<a href="hochgeladenes_not_public_here/'. $_FILES['uploaddatei']['name'] .'">';
    echo 'hochgeladenes_not_public_here/'. $_FILES['uploaddatei']['name'];
    echo '</a>';
}
}
	
?>