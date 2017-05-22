<?php
include '../index.php';
?>
<p> Enoncé de l'exo :Afficher la date du jour + 20 jours..</p>
<div>
    <?php
    $date = date_create('now');  // declaration de la var avec la date du jours 
    date_modify($date, '+20 day');      // + 20 jrs 
    echo date_format($date, 'd-m-Y');   // affich la date + 20 jrs 
    ?>
</div>
</body>
</html>
