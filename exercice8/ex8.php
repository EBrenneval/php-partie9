<?php
include '../index.php';
?>
<p> Enoncé de l'exo :Afficher la date du jour - 22 jours.</p>
<div>
    <?php
    $date = date_create('now');  // declaration de la var avec la date du jours 
    date_modify($date, '-22 day');      // + 22 jrs 
    echo date_format($date, 'd-m-Y');   // affich la date - 22 jrs  
    ?>
</div>
</body>

</html>
