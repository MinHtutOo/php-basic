<?php

// unix time stamp
// coordinate universal time => Thursday 1 january 1970 utc second

date_default_timezone_set('Asia/Rangoon');
$ary = getdate();
echo "<pre>".print_r($ary,true)."</pre>";

echo $ary[0];
echo "<hr>";
echo time();

?>