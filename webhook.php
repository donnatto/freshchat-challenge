<?php

if (file_exists('request.log')) {
  $log = readfile('request.log');
  var_dump($log);
}

header('Content-Type: application/json');
$request = file_get_contents('php://input');
$req_dump = print_r( $request, true );
$fp = file_put_contents( 'request.log', $req_dump );

?>