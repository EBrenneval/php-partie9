<?php
include '../index.php';
?>
<p> Enoncé de l'exo :Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00..</p>
<div><?php
echo time();
?>
</div>
<div>
    <?php
    $strtotime = strtotime("02 August 2016 15:00"); // je stock ma variable  avec la fction strtotime pour le timestamps du jours
    echo $strtotime;   // j'affiche ma variable  
    ?>
</div>
    </body>
</html>




