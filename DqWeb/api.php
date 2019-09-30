<?php
define('WEB_ROOT',dirname(__FILE__));
include_once dirname(__FILE__).'/../DqLoader.php';
include WEB_ROOT.'/httpauth.php';
ini_set('display_errors','on');
try {
    makeApiResponse(200, 'ok');
}catch (Exception $e){
	makeApiResponse(500, $e->getMessage());
}

function makeApiResponse($code, $msg, $data = [])
{
    $ret = ['code' => $code, 'msg' => $msg, 'data' => $data];
    return $ret;
} 