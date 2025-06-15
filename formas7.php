
<?php

for ($l=1; $l<=10; $l++) {
    for ($c=1; $c<=10; $c++) {
        if (
            $l && ($c==1)||($c==10)||
            $c && ($l==1)||($l==10)
            ) {   
            echo "#";
        } else {
            echo "&nbsp&nbsp";
        }
    }
    echo "<br>";
}

?>