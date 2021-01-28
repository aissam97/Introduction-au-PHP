<?php
____________________________________________exercice5_________________________________________________________
$departements = array();

$departements['02'] = 'Aisne';
$departements['59'] = 'Nord';
$departements['60'] = 'Oise';
$departements['62'] = 'Pas-de-Calais';
$departements['80'] = 'Somme';
____________________________________________exercice6_________________________________________________________
echo $t_departements['59'];
_____________________________________________exercice7________________________________________________________
<?php
$departements = array (
'Aisne' => 'Chateau_Thiery',
'Nord' => 'Lille',
'Oise' => 'Clerment',
'Pas_de_calais' => 'Marseille',
'Somme'=> 'Montdidier'
);
$departements['Oise'] = "Abbeville";
echo $departements['Oise'];
_____________________________________________exercice8__________________________________________________________
<?php
$mois=array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
foreach($mois as $month){
echo $month;
echo "<br>";
}
_______________________________________________exercice9_______________________________________________________________________
EX9
<?php
$departements = array (
'Aisne' => 'Chateau_Thiery',
'Nord' => 'Lille',
'Oise' => 'Clerment',
'Pas_de_calais' => 'Marseille',
'Somme'=> 'Montdidier'
);
foreach($departements as $ville){
echo $ville;
echo "<br>";
}

?>
_______________________________________________exercice10_______________________________________________________________________
EX10
<?php
$departements = array (
'Aisne' => 'Chateau_Thiery',
'Nord' => 'Lille',
'Oise' => 'Clerment',
'Pas_de_calais' => 'Marseille',
'Somme'=> 'Montdidier'
);
foreach($departements as $dep => $ville){
echo $dep.' '.'vaut'.' '.$ville;
echo "<br>";
}

?>

?>
