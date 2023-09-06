<?php
    if(isset($_POST['submit'])){
        echo "Registered";
    }
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type"text" name="username">
    <button type="submit" name="submit">Register</button>
</form>