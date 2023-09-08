<?php

$xml =<<<START
<coder>

    <name>Klaus Michaelson</name>
    <age>30</age>
    <subject>History</subject>
    <address>New Orleans</address>
    <married>Yes</married>
    <child>One</child>

</coder>
START;

$data = simplexml_load_string($xml);
print_r($data);

?>