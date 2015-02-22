<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
include_once 'class.banglaDate.php';
$bn = new BanglaDate(time());

$bn->set_time(time(), 0);
print_r($bn->get_date());