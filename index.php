<?php
require 'basic/basic.php';
inc([
    'asset',
    'env',
    'error',
    'route',
    'segment',
    'view'
]);
error(true);
$route=segment(1);
if($route=='/' OR empty($route)){
    $route='mensagem';
}
$filename=ROOT.'call/call.json';
$repos=json_decode(file_get_contents($filename));
if(in_array($route,$repos)){
    route($route);
}else{
    view('home/404');
}
