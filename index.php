<?php
$nom = "Gerard" ;
$anneeNaissance = 2015 ;
$age = 12;
?>
<p>
    
    <?php 
        /*ex 1 */
        echo "Bonjour Mr  .$nom vous avez " ,2021 - $anneeNaissance ," ans".'<br>' ?>

<?php
/*ex 2*/
if($age > 18)
{
echo "Vous êtes majeur";
}
else {
    echo "Vous êtes mineur";
}
?>
</p>