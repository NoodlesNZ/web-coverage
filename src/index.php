<?php
require_once 'include/myclass.php';

$myclass = new Myclass();

switch ($_GET['step']) {
  case '1':
    $myclass->step1();
    break;
  case '2':
    $myclass->step2();
    break;
  case '3':
    $myclass->step3();
    break;
  default:
    echo "No step";
}