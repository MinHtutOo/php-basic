<?php
if(isset($_POST['submit'])){
    // echo $_FILES['file'] ['tmp_name'] . "<br>";
    // echo $_FILES['file'] ['name'] . "<br>";
    // echo $_FILES['file'] ['size'] . "<br>";
    // echo $_FILES['file'] ['type'] . "<br>";

    move_uploaded_file($_FILES['file'] ['tmp_name'], '../upload/' . $_FILES['file'] ['name']);
}

?>

<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>