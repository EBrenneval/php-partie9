<?php
include '../index.php';
?>

<p> Enoncé de l'exercice : Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</p>
<div>
        <?php
$today = date("d/m/Y");   // affiche la date 
echo $today;
?>
</div>
    </body>
</html>
