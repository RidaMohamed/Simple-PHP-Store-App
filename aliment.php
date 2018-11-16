<!DOCTYPE html>

<?php

include 'Donnees.inc.php';



//$i = 1;
$j = 0 ;
/*
foreach ($Recettes as $key => $value) {
    
    foreach ($value as $key1 => $value1) {
        if ($i != 4){
        
        echo $value1;
        echo '<br>';
        $i ++ ;
        }
        else {
            $i = 1 ;
            foreach ($value1 as $key => $value) {
                 echo $value;
                 echo '<br>';
            }
        }
    }
    
    echo 'REcette'.$j.'<br><br>------<br><br>';
    $j++;
    
}*/

//listes des spuer categorie




/*foreach ($Hierarchie as $key => $value) {
    if ($key == ) {
        
    }
    
}*/

/*foreach ($Hierarchie as $key => $value) {
    foreach ($value as $key1 => $value1) {
        if ($key1 == 'super-categorie' ) {
            print_r($value1);
            echo '<br>';
        }
        
    }
    
}*/

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
        
        function echho (){
            var x = document.getElementById("H").innerHTML ; 
            x = x + "<br> Recette";
            document.getElementById("H").innerHTML = x;
        }
        </script>
 
        <?php
        echo '<form>';

for($j ; $j<8 ; $j++){
    echo '<button type="button" onclick="echho()" >';
    echo $Hierarchie['Aliment']['sous-categorie'][$j].'<br>';
    echo '</button>';
    echo '<br>';
}
echo '</form>';
        ?>
        <p id="H">
            ddfdfdfdfdf
        </p>
       echo <button type="button" onclick="echho()"> gfhfghfghfgh</button>
     
    </body>
</html>

