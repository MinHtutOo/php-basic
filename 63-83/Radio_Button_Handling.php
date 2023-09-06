<?php
if(isset($_POST['submit'])){
    $color = $_POST['myRadio'];
    echo "You choose " . $color;
}
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <h4>Choose Color</h4>
    <input type="radio" name="myRadio" value="Red">Red<br>
    <input type="radio" name="myRadio" value="Green">Green<br>
    <input type="radio" name="myRadio" value="Blue">Blue<br>
    <input type="radio" name="myRadio" value="Yelllow">Yellow<br>
    <input type="radio" name="myRadio" value="Brown">Brown<br>
    <input type="submit" name="submit" value="choose">
</form>