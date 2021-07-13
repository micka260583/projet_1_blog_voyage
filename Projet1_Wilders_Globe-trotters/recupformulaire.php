<?php
include 'layout/_header.php';
require 'fonctionformulaire.php';
?>
<div class="recupform">
<?php
echo "Merci " . $_GET['name'] . " " . $_GET['firstname'] . " de nous avoir contacté à propos de: " . '<br>' . '<br>';
echo '"' . $_GET['message'] . '"' . '<br>' . '<br>';
echo " L'équipe des Wilders globe-trotters vous contactera à l’adresse suivante: " . $_GET['email'] . '<br>' . '<br>';
?> </div>
<?php
include 'layout/_footer.php';
?>