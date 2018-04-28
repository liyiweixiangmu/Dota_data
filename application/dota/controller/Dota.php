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
//    protected $client;
//    public function __construct()
//    {
//       $this->client  = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');
//    }

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

    /**
     *  查询ID,获取英雄数据
     *  添加英雄数据
     *
     * */
    public function user_hero()
    {
        $player_id = '145580099';
        $client  = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');
        $user_hero =  $client->getData('/data-service/dota2/pro/player/'.$player_id.'/hero-info',[]);

//        $hero_model = new Hero;

        echo "<pre>";
//        $heros = array();
        foreach ($user_hero as $key=>$value){
            if(!Hero::get(['hero_id'=>$value['hero_id']])){
                $hero['hero_id'] = $value['hero_id'];
                $hero['hero_name'] = $value['name'];
                if($result = Hero::create($hero)){
                    echo '英雄['.$hero['hero_name'].':'.$hero['hero_id'].']新增成功 ';
                    echo "<br>";
                }else{
                    return '新增出错';
                }
            }else{
                echo "已存入数据库<hr>";
            }

//            var_dump($key);echo "<br>";var_dump($value);
//            批量新增
//            $hero = array();
//            $hero['hero_id'] = $value['hero_id'];
//            $hero['hero_name'] = $value['name'];
//            $heros[$key] = $hero;
//            echo "<hr>";
//            echo "<hr>";
        }

//        if($hero->saveAll($heros)){
//            return '新增成功';
//        }else{
//            return $hero->getError();
//        }

        echo "<pre>";
//        var_dump($user_hero);
        echo "</pre>";
    }

    /**
     * 英雄数据列表
     * @return mixed
     */
    public function hero()
    {
        $heros = Hero::order('hero_id asc')->paginate(10);
        $this->assign('heros',$heros);
        $this->assign('count',count($heros));

        return $this->fetch('hero/index');

    }

    /**
     * 比赛数据
     */
    public function match()
    {
        $match_id = 3850168709;
        $client = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');
        $response = $client->getData('/data-service/dota2/public/match/'.$match_id.'/general_info');

        echo "<pre>";
        var_dump($response['players']);
        echo "</pre>";

    }
}