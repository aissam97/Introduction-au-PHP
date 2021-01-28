<?php
function detect($genre,$age){
    if($genre=="male"){
        if($age>18){
            echo " Vous êtes un homme et vous êtes majeur";
        }else {
            echo "Vous êtes un homme et vous êtes mineur ";

        }
    }
    if($genre=="female"){
        if($age>18){
            echo " Vous êtes un homme et vous êtes majeur";
        }else {
            echo "Vous êtes une femme et vous êtes mineur ";

        }
    }
}
echo detect("male",8)

?>

