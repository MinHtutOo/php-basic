<?php

    if(isset($_REQUEST['submit'])){ //$_REQUEST can use both GRT and POST
        $name = $_REQUEST['username'];
        echo "Username is " . $name;
    }

?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type="text" name="username"><br>
    <input type="submit" name="submit" value="Upload">
</form>