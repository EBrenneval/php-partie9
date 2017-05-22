<?php
include '../index.php';
?>
<p> Enoncé de l'exo :Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016..</p>
<div>
    <?php
    $date = new DateTime('2016-05-16');  // instencie la class date time  en créant l'objet $date
     $today = new DateTime('now'); // on instencie la class date time avec la date du jrs
    $result = $date->diff($today);        // methode de date time qui fais la différence entre les 2 dates.
    echo $result->format('%R%a days');    // on affiche le resultat. 
    ?>
</div>
</body>
</html>
