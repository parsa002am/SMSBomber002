<?php
require "src/SMSbomber002.php";
$TestNumber="09121122333";

try {
$sb = new smsbomber002($TestNumber);

echo $sb->SbarghMan();
} catch (Exception $e) {

    echo $e->getMessage();

}

echo "\nfinish!";