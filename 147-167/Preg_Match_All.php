<?php

$str = "We start learning PHP at 8:30 am to 5:30 pm";

preg_match_all("/(\d+:+\d+)\s*(am|pm)/", $str, $matches, PREG_SET_ORDER);

echo "<pre>" . print_r($matches,true) . "</pre>";

echo "<hr>";

preg_match_all("/(\d+:+\d+)\s*(am|pm)/", $str, $matches, PREG_PATTERN_ORDER);

echo "<pre>" . print_r($matches,true) . "</pre>";
?>