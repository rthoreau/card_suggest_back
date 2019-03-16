<?php
require_once 'base.php';
headers();
$operation = p('operation');
$r = [];
if ($operation) {

}
echo json_encode($r);