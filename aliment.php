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


    echo '<form>';

    for($j ; $j<8 ; $j++){ 
        
        echo '<button id="'.$j.'" type="button" onclick="echho(this.id)" >';
        echo $Hierarchie['Aliment']['sous-categorie'][$j];
        echo '</button>';
        echo '<br>';
}
 
   echo '</form>';
   $id = 0 ;
   
   
     function writeMessage() {

         echo 'Fruit';
         echo $Hierarchie['Aliment']['sous-categorie'][0];
            }
   
   
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            
         function echho (id){
          
             
            /*var x = document.getElementById("H").innerHTML ; 
            x = x + "<br> Recette";
            document.getElementById("H").innerHTML = x;
            alert(id);
            var t = "dsds";
            document.getElementById("H2").innerHTML = t;*/
            
          }
        </script>
    </head>
    <body>
 
 
       
        <p id="H">
            <?php
            $sousCatg= array();
            $k = 0 ;
            foreach ($Hierarchie as $key => $value) {
                if($key == 'Fruit'){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            echo '<button type="button" onclick="echho(this.id)" >';
                            array_push($sousCatg, $value2);
                            
                            echo $value2;
                            echo '</button>';
                            echo '<br>';
                            $k ++ ;
                            
                        }
                    }
                    
                }
               }
            }
            
           
            
            ?>
        </p>
        
        <form id="H2">
            
            <?php
           $sousCatg1 = array();
             for ($index = 0; $index < count($sousCatg); $index++) {
                foreach ($Hierarchie as $key => $value) {
                    if ($key == $sousCatg[$index]) {
                       foreach ($value as $key1 => $value1) {
                         if ($key1 == 'sous-categorie') {
                           foreach ($value1 as $key2 => $value2) {
                            echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $k , $value2);
                            echo $value2;
                            array_push($sousCatg1, $value2);
                            echo '</button>';
                            echo '<br>';
                            $k ++ ;
                            
                        }
                    }
                    } 
                    }
                    
                    
                }
                
            }
            
            ?>
        </form>
        
        <form id="H2">
            
            <?php
            echo '<br>';echo '<br>';echo '<br>';echo '<br>';
          $sousCatg2 = array();
             for ($index = 0; $index < count($sousCatg1); $index++) {
                foreach ($Hierarchie as $key => $value) {
                    if ($key == $sousCatg1[$index]) {
                       foreach ($value as $key1 => $value1) {
                         if ($key1 == 'sous-categorie') {
                           foreach ($value1 as $key2 => $value2) {
                            echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $k , $value2);
                            echo $value2;
                            array_push($sousCatg2, $value2);
                            echo '</button>';
                            echo '<br>';
                            $k ++ ;
                            
                        }
                    }
                    } 
                    }
                    
                    
                }
                
            }
            
            ?>
        </form>
        
         <form id="H2">
            
            <?php
            echo '<br>';echo '<br>';echo '<br>';echo '<br>';
          $sousCatg3 = array();
             for ($index = 0; $index < count($sousCatg2); $index++) {
                foreach ($Hierarchie as $key => $value) {
                    if ($key == $sousCatg2[$index]) {
                       foreach ($value as $key1 => $value1) {
                         if ($key1 == 'sous-categorie') {
                           foreach ($value1 as $key2 => $value2) {
                            echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $k , $value2);
                            echo $value2;
                            array_push($sousCatg3, $value2);
                            echo '</button>';
                            echo '<br>';
                            $k ++ ;
                            
                        }
                    }
                    } 
                    }
                    
                    
                }
                
            }
            
            ?>
        </form>
        
        <form id="H2">
            
            <?php
            echo '<br>';echo '<br>';echo '<br>';echo '<br>';
            $titre ;
            foreach ($Recettes as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    if($key1 == 'titre')
                        $titre = $value1;
                
                if ($key1 == 'index') {
                    foreach ($value1 as $key2 => $value2) {
                        for ($index1 = 0; $index1 < count($sousCatg1); $index1++) {
                            if($value2 == $sousCatg1[$index1]){
                                echo $titre;
                                echo '<br>';
                            }
                        }
                    }
                    
                }
    
                }
            }
            
            ?>
        </form>
             
        <button id="hahah" type="button" > gfhfghfghfgh</button>
     
    </body>
</html>

