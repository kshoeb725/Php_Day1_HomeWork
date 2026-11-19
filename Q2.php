<?php
    function cacluatePErmiter($length , $width){
        return 2 *($length + $width);
    }

    $perimter = cacluatePErmiter(20,30);
    echo " the Permiter is ". $perimter;
    ?>