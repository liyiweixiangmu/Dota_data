<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2018/4/20
 * Time: 11:20
 */
require_once '../vendor/autoload.php';
use Varena\SDK\Request\VarenaRequest;
$client = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');
//$client = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');

//Get
$reponse = $client->getData('/data-service/dota2/pro/league/ti/rank-player',[]);
//Post
//$reponse = $client->postData($uri,$params);
echo "<pre>";
var_dump($reponse);die;