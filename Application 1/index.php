<!doctype html>
    <html>
        <head>
        <title>Application 1</title>
        <meta charset="UTF-8">
        </head>
        <body>
            <?php
                $color=array(
                    'bleu' => '#0000FF',
                    'noir' => '#000000',
                    'rouge' => '#FF0000',
                    'jaune' => '#FFFF00'
                );
            ?>
        
        
            <div id="cadre1" style="float: left; width: 100%; height: 100%;">
                <div class="nav1" style="width: 40%; height: 100%; background-color: #87CEFA; padding: 0px; margin: 0% 0% 0% 30%;">
                    <form method="POST" action="">

                    <p style="font-size: 35px; text-align: center; margin-top: 0%; padding-top: 2%;"><strong>SONATEL ACADÉMIE</strong></p>
                        
                        <div class="nav1a" style="float: left; width: 40%; height: 10%; position: absolute;">
                            <p style="color: white; margin: 0px 0% 0% 37% ;">Taille de la Matrice</p>
                            <img src="images/1.png" style="float: left; width: 5%; background-color: blue; margin: 1% 0% 0% 22%; border-radius: 8px 8px 8px 8px;">
                            <input type="text" name="taille" placeholder="taille" style="position: absolute; width:50%; height: 30%; margin: 1% 0% 0% 0%; border-radius: 7px 7px 7px 7px;">
                        </div>

                        <div class="nav2a" style="float: left; width: 100%; height: 10%; margin: 15% 0% 0% 0%;">
                            <p style="color: white; margin: 0px 0% 0% 45% ;">Select C1</p>
                            <img src="images/2-3.png" style="float: left; width: 5%; background-color: red;  margin: 1% 0% 0% 22%; border-radius: 8px 8px 8px 8px;">
                            <select name="choixc1" style="position: absolute; width:20%; height: 4%; margin: 0.5% 0% 0% 0%; border-radius: 7px 7px 7px 7px;">
                            <?php 
                                    foreach($color as $key=>$value){?>
                                    <option value="<?php echo"$value"; ?>"><?php echo"$key" ?></option>
                                <?php
                                }?>
                            </select>
                        </div>
                
                        <div class="nav3a" style="float: left; width: 100%; height: 10%; margin: 3% 0% 0% 0%;">
                            <p style="color: white; margin: 0px 0% 0% 45% ;">Select C2</p>
                            <img src="images/2-3.png" style="float: left; width: 5%; background-color: green; margin: 1% 0% 0% 22%; border-radius: 8px 8px 8px 8px;">
                            <select name="choixc2" style="position: absolute; width:20%; height: 4%; margin: 0.5% 0% 0% 0%; border-radius: 7px 7px 7px 7px;">
                                <?php 
                                    foreach($color as $key=>$value){?>
                                    <option value="<?php echo"$value"; ?>"><?php echo"$key" ?></option>
                                <?php
                                }?>
                            </select>
                        </div>
                        


                        <div class="nav4a" style="float: left; width: 100%; height: 10%; margin: 3% 0% 0% 0%;">
                            <label for="position"></label><br>
                            <img src="images/4.png" style="float: left; width: 5%; background-color: gray;  margin: 1% 0% 0% 22%; border-radius: 8px 8px 8px 8px;">
                            <select name="choixp" id="position" style="position: absolute; width:20%; height: 4%; margin: 0.5% 0% 0% 0%; border-radius: 7px 7px 7px 7px;">
                            <p style="color: white; margin: 0px 0% 0% 45% ;">Position</p>
                                <option value="up">Haut</option>
                                <option value="down">Bas</option>
                            </select>
                        </div>

                        <div class="nav5a" style="float: left; width: 100%; height: 15%; margin: 3% 0% 3% 0%;">
                            <button type="submit" name="annuler" style="float: left; height: 25px; width: 20%; background-color: gray; margin: 0% 0% 0% 25%; border-radius: 8px 8px 8px;">Annuler</button>
                            <button type="submit" name="dessiner" style="float: right; width: 20%; height: 25px; border-radius: 8px 8px 8px; margin: 0% 23% 0% 0%; background-color: yellow;">Dessiner</button>
                            
                        </div>

            </form>
            
        
        </body>
    </html>


    <!-- PARTIE PHP PARTIE PHP PARTIE PHP PARTIE PHP PARTIE PHP PARTIE PHP -->


    <?php
    
        if (isset($_POST['annuler'])){
            echo '<p style="font-size: 25px; color: red; text-align: center;"><strong>Vous pouvez resaisir les valeurs.</p></strong>';
        }else{
        if (isset($_POST['dessiner'])){
                $taille=intval($_POST['taille']);
                $couleur1=$_POST['choixc1'];
                $couleur2=$_POST['choixc2'];
                $position=$_POST['choixp'];
                if (!empty('$taille')){
                    if (!preg_match('/^[0-9]+$/',$_POST['taille'])){
                        echo '<p style="font-size: 25px; color: red; text-align: center;"><strong>Veuillez saisir des valeurs numeriques</p></strong>';
                    }
                    
                    if ($couleur1==$couleur2){
                        echo '<p style="font-size: 25px; color: red; text-align: center;"><strong>Veuillez choisir des couleurs differentes</p></strong>';
                    }else{
                    if ($position=="up"){
                    echo '<table style="width: 50%; margin-top: 10%; margin-left: 25%;">';
                    for ($i=0; $i<$taille; $i++){
                        echo '<tr style="width: 100%;">';
                        for ($j=0; $j<$taille; $j++){
                            if ($i>=$j || $i+$j==$taille-1){
                                echo "<td style='background-color: $couleur1; width: 25px; height: 25px;'>";
                                echo "</td>";
                            }
                            else{
                                echo "<td style='background-color: $couleur2; width: 25px; height: 25px;'>";
                                echo "</td>";
                            }
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                    }
                    elseif ($position="down"){
                        echo '<table style="width: 50%; margin-top: 10%; margin-left: 25%;">';
                        for ($i=0; $i<$taille; $i++){
                        echo '<tr style="width: 100%;">';
                        for ($j=0; $j<$taille; $j++){
                            if ($i>=$j || $i+$j==$taille-1){
                                echo "<td style='background-color: $couleur2; width: 25px; height: 25px;'>";
                                echo "</td>";
                            }
                            else{
                                echo "<td style='background-color: $couleur1; width: 25px; height: 25px;'>";
                                echo "</td>";
                            }
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                    }
                }

                }
                else{
                    echo "Saisir un caractere etant numerique et positive";
                   } 
              }
            }
            
            
            echo '</div>';
        echo '</div>';
    ?>