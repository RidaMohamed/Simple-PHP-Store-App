 <?php/*
                        echo '<div class="container-2" >';
                        for ($index1 = 0; $index1 < count($tableau_sous_Cat); $index1++) {
                            echo '<div class="iner-container2">'
                            . '<p>'
                            . $tableau_sous_Cat[$index1];
                            Cherchersouscat2($tableau_sous_Cat[$index1]);
                            echo '<div class="container-3">';  
                            for ($index2 = 0; $index2 < count($tableau_sous_Cat2); $index2++) {
                                echo  '<div class="iner-container3">'
                                    . '<p>'
                                    . $tableau_sous_Cat2[$index2]
                                        .'<div class="container-4">';
                                        Cherchersouscat3($tableau_sous_Cat2[$index2]);
                                        for ($index3 = 0; $index3 < count($tableau_sous_Cat3); $index3++) {
                                            echo  '<div class="iner-container4">'
                                            . '<p>'
                                            . $tableau_sous_Cat3[$index3]
                                            . '<div class="container-5">';
                                            Cherchersouscat4($tableau_sous_Cat3[$index3]);
                                                    //writeMessage(0);
                                                    for ($index = 0; $index5 < count($tableau_sous_Cat4); $index5++) {
                                                        echo '<div class="iner-container5">'
                                                        . '<p id="0" onclick="echho(this.id)">'
                                                        . $tableau_sous_Cat4[$index5]
                                                        . '</p>'
                                                        . '</div>';
                                                    }
                                                    
                                            
                                            echo '</div>' 
                                            .'</p>'
                                            . '</div>';
                                        }
                                    echo '</div>'
                                    . '</p>'
                                    . '</div>';
                                     
                            }     
                            echo  '</div>';
                            echo  '</p>'
                            . '</div>';                        
                        }
                        echo  '</div>';
                    */?>

 echo '<div class="container-3">'
                                    . '<nav class="nav-bar3">'
                                            . '<ul>';
                                            Cherchersouscat2($tableau_sous_Cat[$index]);
                                            for ($index1 = 0; $index1 < count($tableau_sous_Cat2); $index1++) {
                                                echo '<li>'
                                                . $tableau_sous_Cat2[$index1]
                                                . '</li>';
                                            }
                                    echo '</ul>'
                                    . '</nav>'
                                    . '</div>';


  <li id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0];?>
                        <div class="container-2" >
                            <div class="iner-container2">
                                <p id="0" onclick="echho(this.id)">
                                    <?php echo $tableau_Super_Cat[0];?>
                                
                                <div class="container-3">
                                    <div class="iner-container3">
                                        <p id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0];?>
                                        <div class="container-4">
                                            <div class="iner-container4">
                                                <p id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0]; ?>
                                                <div class="container-5">                              
                                                    <?php
                                                    //writeMessage(0);
                                                    for ($index = 0; $index < count($tableau_sous_Cat4); $index++) {
                                                        echo '<div class="iner-container5">'
                                                        . '<p id="0" onclick="echho(this.id)">'
                                                        . $tableau_sous_Cat4[$index]
                                                        . '</p>'
                                                        . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                                </p>
                                            </div>

                                            <div class="iner-container4">
                                                <p id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0]; ?>
                                               
                                                
                                                </p>
                                            </div>

                                            <div class="iner-container4">
                                                <p id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0]; ?></p>
                                            </div>

                                        </div>
                                        
                                        
                                        
                                        </p>
                                    </div>
                                    
                                    <div class="iner-container3">
                                        <p id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0];?></p>
                                    </div>
                                    
                                    <div class="iner-container3">
                                        <p id="0" onclick="echho(this.id)"><?php echo $tableau_Super_Cat[0];?></p>
                                    </div>
                                    
                                </div>
                                </p>
                            </div>
                            

                        </div>
                    </li>