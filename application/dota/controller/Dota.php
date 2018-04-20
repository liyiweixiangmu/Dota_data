<?php

/**
 * Created by PhpStorm.
 * User: z
 * Date: 2018/4/20
 * Time: 14:53
 */
namespace app\dota\controller;
use app\dota\model\Hero;
use think\Controller;
use Varena\SDK\Request\VarenaRequest;

class Dota extends Controller
{
    public function index()
    {
        $player_id = '89173283';
        $client = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');
        //$client = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');

        //Get
        $reponse = $client->getData('/data-service/dota2/analysis/player/'.$player_id.'/basic_stats',[]);
        $dotaer = array();
        $this->assign('user',$reponse);
        $week = $client->getData('/data-service/dota2/analysis/player/'.$player_id.'/weekly_stats',['week'=>'2018_16']);
        $this->assign('week',$week);
        $heros = $client->getData('/data-service/dota2/analysis/player/'.$player_id.'/heroes_usage');
        $heros = $client->getData('/data-service/dota2/analysis/player/'.$player_id.'/weekly_heroes_usage',['week'=>'2018_15']);
        /*
        foreach ($heros as $key => $value){
            $heros[$key]['hero_name'] = Hero::get(['hero_id'=> $value['hero_id']])->hero_name;
        }
        */
        echo "<pre>";
        var_dump($heros);
        echo "</pre>";
//        $this->assign('heros',$heros);
        return $this->fetch('');
    }

    public function hero()
    {
        $heros = Hero::paginate(5);
        $this->assign('heros',$heros);
        $this->assign('count',count($heros));

        return $this->fetch('hero/index');

    }
}