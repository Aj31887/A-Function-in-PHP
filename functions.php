<?php
       // Det här är funktion med namnet hej
       // Anrop med valfritt antal in parametrar
       function hej( ){
            // func_num_args() tar reda på antal inparametrar
           $antal = func_num_args(); 
           echo "Antal inparametrar: " .$antal . "<br>";
           // func_get_args() hämtar parametrarna och lägger i en array
           $parameterLista = func_get_args();
           foreach($parameterLista as $value){
               echo $value . " ";
           }
           echo "<br>";
       }
    ?>

<!--
    Här anropas funktionen från body
-->
<?php
       // här anropar vi funktionen med namnet hej tre gånger
       hej(1);
       hej(1, 2, 3);
       hej(1, 2, 3, 4, 5);
?>
 
<!--
Utskrift:
Antal inparametrar: 1
1
Antal inparametrar: 3
1 2 3
Antal inparametrar: 5
1 2 3 4 5 
-->