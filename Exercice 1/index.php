<!doctype html>
<html>
    <head>
        <title>Exercice 1</title>
        <meta charset="UTF-8">
        <style>
            .pagination {
              display: inline-block;
            }
            
            .pagination a {
              color: black;
              float: left;
              padding: 8px 16px;
              text-decoration: none;
            }
        </style>
    </head>
    <body>

        <form method="POST" action="">
                <input type="text" name="v" placeholder="Saisir une valeur superieur a 10.000" style="width: 20%;">
                <button type="submit">Valider</button>
        </form>
        <br>
        <br>
    </body>
</html>

<!--   PARTIE PHP  --> <!--   PARTIE PHP  --> <!--   PARTIE PHP  --> <!--   PARTIE PHP  --> <!--   PARTIE PHP  --> <!--   PARTIE PHP  -->




 <?php
    if (isset($_POST['v'])){
        if (!empty(['v'])){

            $v=intval($_POST['v']);
            
            $tab1=array();
            
            $tab2=array(
            'inf'=> array(),
            'sup'=> array()
            );

            if (!empty($v)){
                if ($v<=10000){
                    echo "Veuillez saisir un nombre superieur a 10000";
                }
                else{
                    
                        $som=0;
                        $cpt=0;
                        $v=intval($_POST['v']);
                        $w=0;
                        echo '<table style="width: 100%; height: 100%; background-color: #F5F5F5;">';
                        
                        for ($i=2; $i<=$v; $i++){
                            $r=1;
                            $y=2;
                            while($r!=0){
                                $r=$i%$y;
                                $y=$y+1;}
                                if ($y==($i+1)){
                                    
                                    
                                    array_push($tab1, $i);
                                    
                                    $som=$som+$tab1[$cpt];
                                    
                                    
                                        echo '<tr style="width: 8%; background-color: #F5F5F5; float: left; border: 2px solid black">';
                                                                            
                                        echo '<td>';
                                            echo $tab1[$cpt].' ';
                                        echo '</td>';
                                        echo '</tr>';
                                        $cpt=$cpt+1;
                                }
                            }
                        echo '</table>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        
                        $moy=$som/$cpt;
                        echo '<p style="font-size: 25px; color: red;">La moyenne est:  </p>';
                        echo $moy;
                       
                       echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        
                        foreach ($tab1 as $i){
                            if ($i<$moy){
                                array_push ($tab2['inf'], $i);
                            }
                        }

                            foreach ($tab1 as $i){
                            if ($i>$moy){
                                array_push ($tab2['sup'], $i);
                                }
                            }
                        
                        
                        
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        $cpt=0;
                        echo '<p style="font-size: 20px; color: blue;">les nombres premiers qui sont inferieurs a la moyenne sont: </p>';
                        echo '<br>';
                        echo '<br>';
                        echo '<table style="width: 100%; height: 100%; background-color: #F5F5F5;">';
                        for ($i=0; $i<count($tab2['inf']); $i++){
                         echo '<tr style="width: 8%; background-color: #F5F5F5; float: left; border: 2px solid blue">';
                         echo '<td>';
                           echo $tab2['inf'][$cpt];
                         echo '</td>';
                         echo '</tr>';
                         $cpt=$cpt+1;
                        }
                        echo '</table>';

                        $cpt=0;
                        echo '<br>';
                        echo '<br>';
                        echo '<p style="font-size: 20px; color: orange;">les nombres premiers qui sont inferieurs a la moyenne sont: </p>';
                        echo '<br>';
                        echo '<br>';
                        echo '<table style="width: 100%; height: 100%; background-color: #F5F5F5;">';
                        for ($i=0; $i<count($tab2['sup']); $i++){
                         echo '<tr style="width: 8%; background-color: #F5F5F5; float: left; border: 2px solid red">';
                         echo '<td>';
                           echo $tab2['sup'][$cpt];
                         echo '</td>';
                         echo '</tr>';
                         $cpt=$cpt+1;
                        }
                        echo '</table>';
                                        
                }
            }
            else{
                    echo "Veullez saisir des caractere numerique";
                }
        }
    }
    
?>