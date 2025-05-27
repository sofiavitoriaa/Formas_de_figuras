
<?php

for ($l=1; $l<=10; $l++) {
    for ($c=1; $c<=10; $c++) {
        if (
            $l==1 ||
            $l==3 ||
            $l==5 || 
            $l==7 || 
            $l==9
            ) {
            echo "#";
        } else {
            echo "&nbsp";
        }
    }
    echo "<br>";
}

?>






