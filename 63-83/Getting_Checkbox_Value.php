<?php
if(isset($_POST['submit'])){
    if(isset($_POST['color'])){
        $colors = $_POST['color'];
        foreach($colors as $color){
            echo $color . "<br>";
        }
    }
}
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <h4>Choose Color</h4>
    <input type="checkbox" name="color[]" value="Red">Red<br>
    <input type="checkbox" name="color[]" value="Green">Green<br>
    <input type="checkbox" name="color[]" value="Blue">Blue<br>
    <input type="checkbox" name="color[]" value="Yelllow">Yellow<br>
    <input type="checkbox" name="color[]" value="Brown">Brown<br>
    <input type="submit" name="submit" value="choose">
</form>