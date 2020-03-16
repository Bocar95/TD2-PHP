<!doctype html>
<html>
    <head>
        <title>Exercice 2</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <form method="POST" action="">
                <select name="langue">
                    <option>Francais</option>
                    <option>Anglais</option>
                </select>
                <button type="submit">Valider</button>
        </form>

        
    </body>
</html>











<?php
if (!empty($_POST["langue"])){
    
    if ($_POST["langue"]=="Francais"){
        $calendrier=array(
                '1' => 'Janvier',
                '2' => 'Fevrier',
                '3' => 'Mars',
                '4' => 'Avril',
                '5' => 'Mai',
                '6' => 'Juin',
                '7' => 'Juillet',
                '8' => 'Aout',
                '9' => 'Septembre',
                '10' => 'Octobre',
                '11' => 'Novembre',
                '12' => 'Decembre'
            );

        echo '<table style="width: 50%; height: 20%; border: 1px solid black;">';
        for ($ligne=1; $ligne<=12; $ligne=$ligne+3){
            echo '<tr style="width: 33.33%; height: 25%; border: 2px solid blue; background-color: #F5F5F5;">';
            for ($col=$ligne; $col<$ligne+3; $col++){
            echo '<td>'; 
                echo $col;
            echo '</td>';
            echo '<td>'; 
                echo $calendrier[$col];
            echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    if ($_POST['langue']=="Anglais"){
        $calendrier=array(
                '1' => 'Junuary',
                '2' => 'February',
                '3' => 'March',
                '4' => 'April',
                '5' => 'May',
                '6' => 'June',
                '7' => 'July',
                '8' => 'August',
                '9' => 'September',
                '10' => 'October',
                '11' => 'November',
                '12' => 'December'
            );

        echo '<table style="width: 50%; height: 20%; border: 1px solid black;">';
        for ($ligne=1; $ligne<=12; $ligne=$ligne+3){
            echo '<tr style="width: 33.33%; height: 25%; border: 1px solid blue; background-color: #F5F5F5;">';
            for ($col=$ligne; $col<$ligne+3; $col++){
            echo '<td>'; 
                echo $col;
            echo '</td>';
            echo '<td>'; 
                echo $calendrier[$col];
            echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
       
?>