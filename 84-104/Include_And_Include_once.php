<?php

    // include => when sth is wrong in that file, it show warninng and go to next file

    include("Header.php");
?>


<?php

   include "blah.php";

?>

<?php
    // can also used include_once();
    include_once "Body.php"; // can also used include_once();
?>


<?php
    include "Footer.php";
?>