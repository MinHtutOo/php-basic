<?php

for($i = 0; $i <=15; $i++) {
    if($i == 7) {
        echo "<p style='background:yellow'>$i is the most important number.</p><br>";
        continue;
    }else {
        echo "i value is not 5, but it is $i<br>";
    }
}
?>