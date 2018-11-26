<!DOCTYPE html>

<?php

include 'Donnees.inc.php';

//$i = 1;
$j = 0 ;
$tableau_Super_Cat = array ();
$tableau_sous_Cat = array ();
$tableau_sous_Cat2 = array ();
$tableau_sous_Cat3 = array ();
$tableau_sous_Cat4 = array ();
    //echo '<form>';

    for ($j; $j < 8; $j++) {

    //echo '<button id="' . $j . '" type="button" onclick="echho(this.id)" >';
    array_push($tableau_Super_Cat, $Hierarchie['Aliment']['sous-categorie'][$j]);
    //writeMessage($j);
   // echo $Hierarchie['Aliment']['sous-categorie'][$j];
    //echo '</button>';
    //echo '<br>';
}

//echo '</form>';
   $id = 0 ;
   $rec = '';
   
   //fonction pour recuperer recette par la super categorie
   function recupererRecetteSuperCat($id){
       include 'Donnees.inc.php';
       $rec = $Hierarchie['Aliment']['sous-categorie'][$id];
       SousCategori1($rec , $id);
       
   }
   
   //fonction pour recuperer recette par la super categorie
   function recupererRecetteCat1($ing){
       include 'Donnees.inc.php';
       
   }
   
   //fonction pour recuperer recette par la super categorie
   function recupererRecetteCat2($ing){
       include 'Donnees.inc.php';
       
   }
   
   //fonction pour recuperer recette par la super categorie
   function recupererRecetteCat3($ing){
       include 'Donnees.inc.php';
       
   }
   
   //fonction pour recuperer recette par la super categorie
   function recupererRecetteCat4($ing){
       include 'Donnees.inc.php';
       
   }
   
  

   //------------------ces 2 methodes pour recuperer la sous categorie d'une super categorie
     function writeMessage($id) {
         include 'Donnees.inc.php';
         
         
         $rec = $Hierarchie['Aliment']['sous-categorie'][$id];
         //echo $rec;
         //echo 'mohamed';
         Cherchersouscat1($rec);
         

            }
            
     function Cherchersouscat1($rec ) {
         include 'Donnees.inc.php';
         global $tableau_sous_Cat ;
         $tableau_sous_Cat = array ();
         
        $sousCatg= array();
            $k = 0 ;
           // echo $rec;
            foreach ($Hierarchie as $key => $value) {
                if($key == $rec){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $value2);
                            
                            array_push($tableau_sous_Cat, $value2);
                            //array_push(, $k)
                            //echo $value2;
                            //echo '</button>';
                            //echo '<br>';
                           // $k ++ ;

                        }
                    }
                    
                }
               }
            }
   
            //SousCategori2($sousCatg);
     }
     
    //---------------------------------------------------- 
     
    //------------------cette methode est pour recuperer la souscetegorie2
     function Cherchersouscat2($rec) {
         include 'Donnees.inc.php';
         global $tableau_sous_Cat2;
         $tableau_sous_Cat2 = array ();
        // $sousCatg= array();
            $k = 0 ;
            foreach ($Hierarchie as $key => $value) {
                if($key == $rec){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $value2);
                            
                            array_push($tableau_sous_Cat2, $value2);
                            //array_push(, $k)
                            //echo $value2;
                            //echo '</button>';
                            //echo '<br>';
                           // $k ++ ;

                        }
                    }
                    
                }
               }
            }
   
            //SousCategori2($sousCatg);
     }
     
     //------------------cette methode est pour recuperer la souscetegorie2
     function Cherchersouscat3($rec) {
         include 'Donnees.inc.php';
         global $tableau_sous_Cat3;
         $tableau_sous_Cat3 = array();
        // $sousCatg= array();
            $k = 0 ;
            foreach ($Hierarchie as $key => $value) {
                if($key == $rec){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $value2);
                            
                            array_push($tableau_sous_Cat3, $value2);
                            //array_push(, $k)
                            //echo $value2;
                            //echo '</button>';
                            //echo '<br>';
                           // $k ++ ;

                        }
                    }
                    
                }
               }
            }
   
            //SousCategori2($sousCatg);
     }
     
     //------------------cette methode est pour recuperer la souscetegorie4
     function Cherchersouscat4($rec) {
         include 'Donnees.inc.php';
         global $tableau_sous_Cat4;
          $tableau_sous_Cat4 = array();
         
        // $sousCatg= array();
            $k = 0 ;
            foreach ($Hierarchie as $key => $value) {
                if($key == $rec){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            //echo '<button type="button" onclick="echho(this.id)" >';
                            //array_push($sousCatg, $value2);
                            
                            array_push($tableau_sous_Cat4, $value2);
                            //array_push(, $k)
                            //echo $value2;
                            //echo '</button>';
                            //echo '<br>';
                           // $k ++ ;

                        }
                    }
                    
                }
               }
            }
   
            //SousCategori2($sousCatg);
     }
     
     
     //-------------------------------------
     
     function SousCategori1($rec , $id) {
        include 'Donnees.inc.php';
        $sousCatg= array(); 
            foreach ($Hierarchie as $key => $value) {
                if($key == $rec){
                foreach ($value as $key1 => $value1) {
                        if ($key1 == 'sous-categorie') {
                        foreach ($value1 as $key2 => $value2) {
                            array_push($sousCatg, $value2); 
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
                            array_push($sousCatg1, $value2);
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
                           foreach ($value1 as $key2 => $value2) { array_push($sousCatg2, $value2);
                            
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
                            array_push($sousCatg3, $value2);  
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
         $titre = array() ;//Titre de recette  
         $titre1 ;
            foreach ($Recettes as $key => $value) {
                $b = 1;
                foreach ($value as $key1 => $value1) { 
                    if($key1 == 'titre'){
                        $titre1 = $value1;}
                
                if ($key1 == 'index') {
                    
                    foreach ($value1 as $key2 => $value2) {
                        
                    for ($index1 = 0; $index1 < count($sousCatg); $index1++) {
                            if($value2 == $sousCatg[$index1]){
                                
                                if ($b == 1) {
                                    array_push($titre, $titre1);
                                    $b=0;}
                                
                            }
                        }
                    for ($index2 = 0; $index2 < count($sousCatg1); $index2++) {
                            if($value2 == $sousCatg1[$index2]){
                                
                                if ($b == 1) {
                                    array_push($titre, $titre1);
                                    $b=0;}
                                
                            }
                        }
                    for ($index3 = 0; $index3 < count($sousCatg2); $index3++) {
                            if($value2 == $sousCatg2[$index3]){
                                
                                if ($b == 1) {
                                    array_push($titre, $titre1);
                                    $b=0;}
                                
                            }
                        } 
                    for ($index4 = 0; $index4 < count($sousCatg3); $index4++) {
                            if($value2 == $sousCatg3[$index4]){
                                
                                if ($b == 1) {
                                    array_push($titre, $titre1);
                                    $b=0;}
                                
                            }
                        }

                    }
                    
                    
                }
    
                }
            }
           // echo '<button>'.'$id'.'</button>';
            
            $journalName = array ();
               //echo '<button id="' . 0 . '" type="button" onclick="echho(this.id)" >'.'mohamed</button>';
    //array_push($tableau_Super_Cat, $Hierarchie['Aliment']['sous-categorie'][$j]);
    //writeMessage($j);
  // echo $Hierarchie['Aliment']['sous-categorie'][0];
    //echo '</button>';
   // echo '<br>';
            
            for ($index6 = 0; $index6 < count($titre); $index6++) {
                array_push($journalName, preg_replace('/\s+/', '_', $titre[$index6]));
                //echo $index6 . '<br>';
               echo '<button>'.$titre[$index6].'</button>';
                //echo $journalName[$index6].'<br>';
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
          
             
            var x ; 
            //alert(id)
            //var choi5 = "choix = " + id ;
            //document.cookie = choi5;
            if(id == 0){
                x = "<br> <?php recupererRecetteSuperCat(0); ?>";
                /*var ul = document.getElementById("list");
                var li = document.createElement("li");
               li.appendChild(document.createTextNode("Four"));
               var button = document.createElement("button");
               button.innerHTML = "asdasd";
               li.appendChild(button);
               li.setAttribute("id","element4");
               ul.appendChild(li);*/
               //alert(li.id);
              //alert(x);
                
            }else if(id == 1){
                x = "<br> <?php recupererRecetteSuperCat(1); ?>"; 
                
            }else if(id == 2){
                x = "<br> <?php recupererRecetteSuperCat(2); ?>"; 
                
            }else if(id == 3){
                x = "<br> <?php recupererRecetteSuperCat(3); ?>"; 
                
            }else if(id == 4){
                x =  "<br> <?php recupererRecetteSuperCat(4); ?>"; 
                
            }else if(id == 5){
                x = "<br> <?php  recupererRecetteSuperCat(5); ?>"; 
                
            }else if(id == 6){
                x =   "<br> <?php recupererRecetteSuperCat(6); ?>"; 
                
            }else if(id == 7){
                x =  "<br> <?php recupererRecetteSuperCat(7); ?>"; 
                
            }


            
            document.getElementById("T").innerHTML = x;
            //document.cookie = "choix=;";
            //alert(id);
            //var t = "dsds";
           // document.getElementById("H2").innerHTML = t;
            
          }   
        </script>
        <!-- Css Link -->
        <link rel="stylesheet" href="./CSS/StyleDeMenu.css">
        
    </head>
    <body>
        
        <!-- Menu des ingrediants -->
        <div class="container">
            <nav class="nav-bar">
                <ul>
                    <li id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(0);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    .  $tableau_sous_Cat[$index];
                                   echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>';
                                    
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    </li>
                    <li id="1" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[1];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                            <?php 
                                writeMessage(1);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                    echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>' 
                                            . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    </li>
                    <li id="2" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[2];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(2);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                     echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    </li>
                    <li id="3" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[3];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(3);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                    echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                ?>
                            </ul>
                    </div>
                    </li>
                    <li id="4" class="li-4" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[4];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(4);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                    echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                ?>
                            </ul>
                    </div> 
                    </li>
                    <li id="5" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[5];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(5);
                                
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                    echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                
                                ?>
                            </ul>
                    </div>
                    </li>
                    <li id="6" class="li-6" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[6];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(6);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                    echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                
                                ?>
                            </ul>
                    </div>
                    </li>
                    <li id="7" class="li-6" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[7];?>
                    <div class="container-2">
                        <nav class="nav-bar2">
                            <ul>
                                <?php 
                                writeMessage(7);
                                for ($index = 0; $index < count($tableau_sous_Cat); $index++) {
                                    echo '<li>'
                                    . $tableau_sous_Cat[$index];
                                    echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1];
                                                echo '<div class="container-4">'
                                                    . '<nav class="nav-bar4">'
                                                    . '<ul>';
                                            Cherchersouscat3($tableau_sous_Cat2[$index1]);
                                            for ($index2 = 0; $index2 < count($tableau_sous_Cat3); $index2++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat3[$index2];
                                                echo '<div class="container-5">'
                                                    . '<nav class="nav-bar5">'
                                                    . '<ul>';
                                            Cherchersouscat4($tableau_sous_Cat3[$index2]);
                                            for ($index3 = 0; $index3 < count($tableau_sous_Cat4); $index3++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat4[$index3]
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                
                                                
                                                
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>'
                                    .'</li>';
                                }
                                
                                ?>
                            </ul>
                    </div>
                    </li>
                </ul>
            </nav>
            
            <div class="header-banner"></div>
            
            
        </div>
        

        <form id="T" class="form1"> 
            
            

        </form>
        
      
       
    </body>
</html>



