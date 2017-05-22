<?php
include '../index.php';
?>
<link href="cal.css" rel="stylesheet" type="text/css"/>

<p> Enoncé de l'exo :Faire un formulaire avec deux listes déroulantes. 
    aLa première sert à choisir le mois, et le deuxième permet d'avoir l'année.
    En fonction des choix, afficher un calendrier comme celui ci :.</p>


<form action="tp.php" method="POST">
<?php
  // déclaration de la variable pour les années 
  $years = '';
 
  // Parcours du tableau, la boucle for permet de passer en années en années. 
  ?> <select name="years">
  <?php
      for($i=1950; $i<=2018; $i++){
    // L'année est-elle l'année courante ?
    if($i == date('Y'))
    {
      $years = ' years="years"';
    }
    // Affichage de la ligne , <?= remplace le echo
  ?><option value="<?= $i ?>" <?= $years ?>> <?= $i?></option>
  <?php
  // Remise à zéro de $years
    $years='';
  }
  ?></select>


<!-- formulaire pour les mois,-->
<select name="months">
<?php
//on déclare la variable, avec le tableau des mois 
$months= array ('janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
 // boucle foreach pour passer de mois en mois
foreach ($months as $key => $month){
     ?>
<option value ='<?=($key+1)?>'><?=$month ?></option>
<?php
 }
     ?> 
</select>
<input type="submit" value="Valider" />
</form>
<?php
      // isset sert a vérifier si les champs existent. 
            if (isset($_POST['years']) && isset($_POST['months'])){
                ?>
 <!--affiche la date du jrs-->          
<p><?php 
setlocale(LC_TIME,'fr_FR.UTF8');
echo strftime('%A %d %B %Y');?></p>
<!-- Affiche le mois et l'année que l'on vérifie sur la liste déroulante -->
<p><?php 
echo $months[$_POST['months'] - 1] . ' ' . $_POST['years'];?></p>
<?php 
//pour récuperer la position du premier jrs de la semaine où commence le mois.
$dayOfWeek = strftime("%u", strtotime($_POST['months'] . '/' . 1 . '/' . $_POST['years']));
//  Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
$dayOfMonth = cal_days_in_month(CAL_GREGORIAN, $_POST['months'],$_POST['years']); 
//pour récuperer la position du premier jrs de la semaine où commence le mois.
$lastDay = strftime("%u", strtotime($_POST['months'] . '/' . $dayOfMonth . '/' . $_POST['years']));
$differenceDay = 7 - $lastDay;
            } ?>


<!--je crée mon tableau pour afficher mon calendrier-->
<div>
<table>
    <thead>
        <tr>
        <th>lundi</th>
        <th>mardi</th>
        <th>mercredi</th>
        <th>jeudi</th>
        <th>vendredi</th>
        <th>samedi</th>
        <th>dimanche</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            // boucle pour incrémenter case par case, 
            for($calendar=1; $calendar<$dayOfMonth+$dayOfWeek;$calendar++){
                //  si la date du jours et plus grande que la date du calendrier, on met une case vide. 
                if($calendar<$dayOfWeek){
                    ?>
            <td></td>
            <?php
                }else{
                    ?>
            <td><?= ($calendar-$dayOfWeek+1)?></td>
               <?php
                }
                // si on est a la fin de la semaine , on repasse a la ligne en dessous 
                if($calendar % 7 == 0){
                    ?>
            </tr><tr>
                <?php
                }
            }
            for($a = 1; $a <= $differenceDay; $a++){
            ?>
                 <td></td>
            <?php
            }
        ?>
       </tr>
    </tbody>
    <p><?php echo $lastDay ?></p>
</table>
</div>       
</body>
</html>
