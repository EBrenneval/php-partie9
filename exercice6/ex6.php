<?php
include '../index.php';
?>
<p> Enoncé de l'exo : Afficher le nombre de jour dans le mois de février de l'année 2016..</p>
<div>
   <?php
   $days = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // la fction cal_days_in_month permet de retourner le nbre de jours. 
echo "il y'a {$days} jours en fevrier 2016";          // on affiche le résultat. 
   ?>
</div>
    </body>
</html>
