<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/11/2018
 * Time: 16:04
 */
$cartes = array(
    1 => ["As","carte\\01coeur.png"],
        2 => ["Deux","carte\\02coeur.png"],
            3 => ["Trois","carte\\03coeur.png"],
                4 => ["Quatre","carte\\04coeur.png"],
                    5 => ["Cinq","carte\\05coeur.png"],
                        6 => ["Six","carte\\06coeur.png"],
                            7 => ["Sept","carte\\07coeur.png"],
                                8 => ["Huit","carte\\08coeur.png"],
                                    9 => ["Neuf","carte\\09coeur.png"],
                                        10 => ["Dix","carte\\10coeur.png"],
                                            11 => ["Valet","carte\\valetcoeur.png"],
                                                12 => ["Dame","carte\\damecoeur.png"],
                                                    13 => ["Roi","carte\\roicoeur.png"],
);
$joueur1=array_rand($cartes,5);
/*
echo $joueur1[0]."<br>";
echo $joueur1[1]."<br>";
echo $joueur1[2]."<br>";
echo $joueur1[3]."<br>";
echo $joueur1[4]."<br>";
*/
$j1=[];
for ($i=0;$i<5;$i++)
{
    array_push($j1,$cartes[$joueur1[$i]]);

}
/*
echo $j1[0][0]."<br>";
echo $j1[1][0]."<br>";
echo $j1[2][0]."<br>";
echo $j1[3][0]."<br>";
echo $j1[4][0]."<br>";
echo $j1[0][1]."<br>";
echo $j1[1][1]."<br>";
echo $j1[2][1]."<br>";
echo $j1[3][1]."<br>";
echo $j1[4][1]."<br>";
*/
$joueur2=array_rand($cartes,5);
/*
echo $joueur2[0]."<br>";
echo $joueur2[1]."<br>";
echo $joueur2[2]."<br>";
echo $joueur2[3]."<br>";
echo $joueur2[4]."<br>";
*/
$j2=[];
for ($i=0;$i<5;$i++)
{
    array_push($j2,$cartes[$joueur2[$i]]);

}
/*
echo $j2[0][0]."<br>";
echo $j2[1][0]."<br>";
echo $j2[2][0]."<br>";
echo $j2[3][0]."<br>";
echo $j2[4][0]."<br>";
echo $j2[0][1]."<br>";
echo $j2[1][1]."<br>";
echo $j2[2][1]."<br>";
echo $j2[3][1]."<br>";
echo $j2[4][1]."<br>";
*/
//$joueur2=array_rand($cartes,5);
//echo $joueur2[0]."<br>";
/*
foreach($cartes as $index => $tab)
{

    echo "index ".$index;
    echo "valeur carte ".$tab[0];
    echo "chemin carte ".$tab[1];

    echo "<br>";
}*/
//foreach ($joueur2 as $valeur=>[$carte,$chemin])
//{
//    echo "carte : ".$valeur .", Valeur: ".$carte."<br />";
//}

$score1=0;
$score2=0;
for ($i=0;$i<=4;$i++) {
    $p1= $j1[$i][1];
    $p2= $j2[$i][1];
    if ($joueur1[$i]>$joueur2[$i]) { $score1++; $msg="joueur 1 gagne";}
    elseif ($joueur2[$i]>$joueur1[$i]) { $score2++; $msg="joueur 2 gagne";}
    else {$msg="égalité";}
    $k=$i+1;
    echo "<br><br><div style='text-align: center'>Manche : $k </div>";
    echo "<div style='display:flex; justify-content:  space-around'> <div style='display:flex;flex-direction:column;justify-content:center;'><span style='text-align:center'> joueur 1</span><span style='text-align:center'>$joueur1[$i]</span><img src='$p1'></div><div style='display:flex;flex-direction:column;justify-content:center;'><span style='text-align:center'> joueur 2</span><span style='text-align:center'>$joueur2[$i]</span></span></span><img src='$p2'></div></div>";
    echo "<div style='text-align: center'> $msg </div>";
    echo "<div style='text-align: center'> score du joueur 1 ".$score1."</div>";
    echo "<div style='text-align: center'> score du joueur 2 ".$score2."</div>";
}
echo "<br><div style='text-align:center'> <strong> score final: joueur 1 a ".$score1." points et joueur 2 a ".$score2." points</strong></div>";

?>