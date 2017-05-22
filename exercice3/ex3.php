<?php
include '../index.php';
?>
<p> Enoncé de l'exo :Afficher la date courante avec le jour de la semaine et le mois en toutes lettres 
    (ex : mardi 2 août 2016)
    Bonus : Le faire en français.</p>
<div>
    <?php
    
   setlocale(LC_TIME, 'fr_FR.UTF8');  // pour afficher la date en français. 
echo strftime('%A %d %B %Y'); // pour afficher la date 
    ?>
</div>
</body>
</html>
