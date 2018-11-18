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
   $rec = '';
   
   
     function writeMessage($id) {
         include 'Donnees.inc.php';
         //echo 'dcdcd';
         //echo $Hierarchie['Aliment']['sous-categorie'][$id];
         $rec = $Hierarchie['Aliment']['sous-categorie'][$id];
         SousCategori1($rec);
         //echo $_COOKIE['choix'];

            }
            
     function SousCategori1($rec) {
         include 'Donnees.inc.php';
         $sousCatg= array();
            $k = 0 ;
            foreach ($Hierarchie as $key => $value) {
                if($key == $rec){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            array_push($sousCatg, $value2);
                            
                            //echo $value2;
                            //echo '</button>';
                            //echo '<br>';
                           // $k ++ ;

                        }
                    }
                    
                }
               }
            }
   
            SousCategori2($sousCatg);
     }
     
     function SousCategori2($sousCatg) {
         include 'Donnees.inc.php';
        
         $sousCatg1 = array();
             for ($index = 0; $index < count($sousCatg); $index++) {
                foreach ($Hierarchie as $key => $value) {
                    if ($key == $sousCatg[$index]) {
                       foreach ($value as $key1 => $value1) {
                         if ($key1 == 'sous-categorie') {
                           foreach ($value1 as $key2 => $value2) {
                           // echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $k , $value2);
                            //echo $value2;
                            array_push($sousCatg1, $value2);
                           
                           // echo '</button>';
                          //  echo '<br>';
                            //$k ++ ;
                            
                        }
                    }
                    } 
                    }
                    
                    
                }
                
            }
            
         
            SousCategori3($sousCatg1 , $sousCatg);
             
         
     }
     
     function SousCategori3($sousCatg1 , $sousCatg) {
         include 'Donnees.inc.php';
         
        
         $sousCatg2 = array();
             for ($index = 0; $index < count($sousCatg1); $index++) {
                foreach ($Hierarchie as $key => $value) {
                    if ($key == $sousCatg1[$index]) {
                       foreach ($value as $key1 => $value1) {
                         if ($key1 == 'sous-categorie') {
                           foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $k , $value2);
                           // echo $value2;
                            array_push($sousCatg2, $value2);
                          
                           // echo '</button>';
                           // echo '<br>';
                          //  $k ++ ;
                            
                        }
                    }
                    } 
                    }
                    
                    
                }
                
            }
            SousCategori4($sousCatg2 ,$sousCatg1 ,$sousCatg);
         
     }
     
     function SousCategori4($sousCatg2 ,$sousCatg1 ,$sousCatg) {
         include 'Donnees.inc.php';
         $sousCatg3 = array();
             for ($index = 0; $index < count($sousCatg2); $index++) {
                foreach ($Hierarchie as $key => $value) {
                    if ($key == $sousCatg2[$index]) {
                       foreach ($value as $key1 => $value1) {
                         if ($key1 == 'sous-categorie') {
                           foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $k , $value2);
                          //  echo $value2;
                            array_push($sousCatg3, $value2);
                           // echo '</button>';
                           // echo '<br>';
                          //  $k ++ ;
                            
                        }
                    }
                    } 
                    }
                    
                    
                }
                
            }
            
            Afficher($sousCatg3 ,$sousCatg2 ,$sousCatg1 ,$sousCatg);
         
     }
     
     function Afficher ($sousCatg3 ,$sousCatg2 ,$sousCatg1 ,$sousCatg) {
         include 'Donnees.inc.php';
         $titre = array() ;
         $titre1 ;
            foreach ($Recettes as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    if($key1 == 'titre')
                        $titre1 = $value1;
                
                if ($key1 == 'index') {
                    foreach ($value1 as $key2 => $value2) {
                        
                    for ($index1 = 0; $index1 < count($sousCatg); $index1++) {
                            if($value2 == $sousCatg[$index1]){
                                
                                array_push($titre, $sousCatg[$index1]);
                            }
                        }
                    }
                    for ($index2 = 0; $index2 < count($sousCatg1); $index2++) {
                        
                        if ($value2 == $sousCatg1[$index2]) {
                            $b = true;
                            for ($index4 = 0; $index4 < count($titre); $index4++) {
                                if ($titre[$index4] == $titre1) {
                                    $b = false;
                                }
                            }
                            
                            if ($b) {
                                array_push($titre, $titre1);
                            }
                            
                        }
                    }
                    
                    for ($index3 = 0; $index3 < count($sousCatg2); $index3++) {
                        
                        if ($value2 == $sousCatg2[$index3]) {
                            $b = true;
                            for ($index5 = 0; $index5 < count($titre); $index5++) {
                                if ($titre[$index5] == $titre1) {
                                    $b = false;
                                }
                            }
                            
                            if ($b) {
                                array_push($titre, $titre1);
                            }
                            
                        }
                    }
                    
                }
    
                }
            }
            
            $journalName = array ();
            
            for ($index6 = 0; $index6 < count($titre); $index6++) {
                array_push($journalName, preg_replace('/\s+/', '_', $titre[$index6]));
                //echo $index6 . '<br>';
                echo $journalName[$index6].'<br>';
                //echo '<img src="./Photos/'.$journalName[$index6].'.jpg" alt="'.$journalName[$index6].'" width="100" height="100">'. '<br>';
                
            }
         
     }
   
   
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            
         function echho (id){
          
             
            var x = document.getElementById("T").innerHTML ; 
            //alert(id);
            
    
            //var choi5 = "choix = " + id ;
            //document.cookie = choi5;
            if(id == 0){
                x =  "<br> <?php writeMessage(0); ?>"; 
                
            }else if(id == 1){
                x = "<br> <?php writeMessage(1); ?>"; 
                
            }else if(id == 2){
                x = "<br> <?php writeMessage(2); ?>"; 
                
            }else if(id == 3){
                x = "<br> <?php writeMessage(3); ?>"; 
                
            }else if(id == 4){
                x =  "<br> <?php writeMessage(4); ?>"; 
                
            }else if(id == 5){
                x = "<br> <?php writeMessage(5); ?>"; 
                
            }else if(id == 6){
                x =   "<br> <?php writeMessage(6); ?>"; 
                
            }else if(id == 7){
                x =  "<br> <?php writeMessage(7); ?>"; 
                
            }


            
            document.getElementById("T").innerHTML = x;
            //document.cookie = "choix=;";
            //alert(id);
            //var t = "dsds";
           // document.getElementById("H2").innerHTML = t;
            
          }
          
        </script>
    </head>
    <body>
 
        <form id="T">
            
        </form>
       
        <p id="H">
            <?php
            ?>
        </p>
        
        <form id="H2">
            
            <?php
            ?>
        </form>
        
        <form id="H2">
            
            <?php
            echo '<br>';echo '<br>';echo '<br>';echo '<br>';
            ?>
        </form>
        
         <form id="H2">
            
            <?php
            echo '<br>';echo '<br>';echo '<br>';echo '<br>';
          
            
            ?>
        </form>
        
        <form id="H2">
            
            <?php
            echo '<br>';echo '<br>';echo '<br>';echo '<br>';
            ?>
        </form>
       
        <button id="hahah" type="button" > gfhfghfghfgh</button>
     
    </body>
</html>

