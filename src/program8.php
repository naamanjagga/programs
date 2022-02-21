<?php 
echo '<table style="width: 800px; hieght:1000px;">';
   for($i = 0; $i < 8 ; $i++){
       echo '<tr>';
       for($j = 0 ; $j < 8 ; $j++) {
           if($i % 2 ==0){
               if($j %2 ==0){
                echo '<td style="width: 100px; hieght:100px; border: 2px solid black;padding-top: 50px; background-color: white;">';
                 echo '</td>';
               } else {
                echo '<td style="width: 100px; hieght:100px; border: 2px solid black;padding-top: 50px; background-color: black;">';
                 echo '</td>';
               }
           } else {
            if($j %2 ==0){
                echo '<td style="width: 100px; hieght:100px; border: 2px solid black;padding-top: 50px; background-color: black;">';
            } else {
                echo '<td style="width: 100px; hieght:100px; border: 2px solid black;padding-top: 50px; background-color: white;">';
                 echo '</td>';
            }
           }
       }
       echo '</tr>';
       echo '<br>';
   }
   echo '<table>';
?>
