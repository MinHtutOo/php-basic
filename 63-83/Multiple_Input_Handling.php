<?php
if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    echo $uname . "<br>" . $email . "<br>" . $pass . "<br>";

    $gender = $_POST['gender'];
    echo $gender . "<br>";

    $subjects = $_POST['subjects'];
    foreach($subjects as $subject){
        echo $subject;
    }


    foreach($_FILES['files']['tmp_name'] as $key => $value){
        move_uploaded_file($_FILES['files']['tmp_name'][$key] , '../upload/' . $_FILES['files']['name'][$key]) . "<br>";
        echo "Upload finish" . "<br>";
    }
}
?>

<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password"><br>
    
    <h4>Choose Gender</h4>
    <input type="radio" name="gender">Male<br>
    <input type="radio" name="gender">Female<br>
    
    <h4>Choose Subject</h4>
    <input type="checkbox" name="subjects[]">HTML<br>
    <input type="checkbox" name="subjects[]">CSS<br>
    <input type="checkbox" name="subjects[]">Java<br>
    <input type="checkbox" name="subjects[]">PHP<br>

    <input type="file" name="files[]" multiple><br>

    <input type="submit" name="submit" value="Register"><br>
</form>