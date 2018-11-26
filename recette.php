<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        function getElement($id){
        include 'Donnees.inc.php';
        $donnees=array();
        $element=$Recettes[$id];
        array_push($donnees, $element['titre']);
        array_push($donnees, $element['ingredients']);
        array_push($donnees, $element['preparation']);
        return $donnees;
        }
        function getNomImage($d){
            $str = str_replace(' ', '_', $d);
            return $str;
        }
        $donnees= getElement(5);
        $nomImage= getNomImage($donnees[0]);
        echo '<h2>'.$donnees[0].'</h2>';
        $lien="./Photos/".$nomImage.".jpg";
        if(is_file($lien)) echo '<img src="./Photos/'.$nomImage.'.jpg" height="400" width="400">';
        echo '<h2>Ingrédients</h2>';
        echo '<p>'.$donnees[1].'</p>';
        echo '<h2>Préparation</h2>';
        echo '<p>'.$donnees[2].'</p>';
        
        ?>
    </body>
</html>

