<?php
include '../index.php';
?>
<p> Enoncé de l'exo : Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
<div>
    <?php
$today = date("d-m-y"); // affiche la date 
echo $today;
?>
</div>
</body>
</html>
