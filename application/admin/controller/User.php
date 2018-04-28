<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2018/4/2
 * Time: 13:48
 */

namespace app\admin\controller;
use app\admin\model\User as UserModel;
use think\Controller;
use think\Loader;
use think\Request;
use think\Validate;

class User extends Controller
{
    public function index()
    {
//        $list = UserModel::all();

//        echo $count;
//        dump($user->toArray());

        // 分页
        $list = UserModel::order('id desc')->paginate(5);
        $this->assign('list',$list);
        $this->assign('count',count($list));

        return $this->fetch('');

    }

    public function add()
    {
//        $data = array(
//            ['name' => '22','email' => '123@qq.com' ,'phone'=> '12312312312'],
//            ['name' => '22','email' => '123@qq.com' ,'phone'=> '12312312312'],
//            ['name' => '22','email' => '123@qq.com' ,'phone'=> '12312312312'],
//            ['name' => '22','email' => '123@qq.com' ,'phone'=> '12312312312'],
//            ['name' => '22','email' => '123@qq.com' ,'phone'=> '12312312312'],
//            );
//        $user = new UserModel;
//        $result = $user->saveAll($data);
//        if($result){
//            return '成功';
//        }else{
//            return $user->getError();
//        }
        return $this->fetch('');
    }

    public function store()
    {
//        dump($request->post('user:'));
        $data = input('post.');
        dump($data);
//        exit;
        $user = new UserModel;
        $rule = [
            'name' => 'require|max:25',
            'email' => 'email',
            'phone' => 'number|length:11',
        ];

        $message = [
            'name.require' => '名称必须',
            'name.max' => '名称最多不能超过25个字符',
            'phone.number' => '电话号码必须是数字',
            'phone.length' => '电话号码必须为11位',
            'email' => '邮箱格式错误',
        ];
//        $validate = new Validate($rule, $message);
        $validate = validate('user');
//        if($validate->check($data)){
        if ($validate->check($data)) {
            if ($user::create($data)) {
//            return '新增成功';
                $this->redirect('/user');
            } else {
                return $user->getError();
            }
        } else {
            return $validate->getError();
        }

    }

    public function edit($id)
    {
        $data = UserModel::get($id);
        $user = $data->toArray();
        $this->assign('user',$user);
        return $this->fetch('');
    }

    public function update()
    {
        $data = input('post.');
        $id = $data['id'];
//        dump($id);
        $user = UserModel::get($id);
        if($user->save($data)){
            $this->redirect('/user');
        }else{
            return $user->getError();
        }
    }
    public function delete($id)
    {
        $result = UserModel::destroy($id);
        if($result){
            return 'success';
            $this->redirect('/user');
        }else{
            return '用户不存在';
        }
    }

    public function max()
    {
        echo $_SERVER['PATH_INFO'];
        exit;
        $a = ['a'=>1,'b'=>2,'c'=>3];
//        echo(max($a));
        $copy = $a;
        arsort($copy);
        foreach ($copy as $item) {
            echo $item."<br>";
        }
    }

    public function xmltest()
    {
        header('Content-Type:text/xml');
        print '<?xml version="1.0"?>'. "\n";
        print  "<shows>\n";

        $shows = array(
            array('name' => 'Modern Family',
                   'channel' => 'ABC',
                'start' => '9:00PM',
                'duration' => '30',
            ),
            array('name' => 'Law & Order',
                'channel' => 'NBC',
                'start' => '9:00PM',
                'duration' => '60',
            )
        );
        foreach($shows as $show) {
            print "<show>\n";
            foreach($show as $tag=> $data) {
//                print "  <$tag>" . htmlspecialchars($data). "</$tag>\n";
                print "  <$tag>" . $data. "</$tag>\n";
            }
            print "</show>\n";
        }
        print "</shows>\n";
    }

    public function domxml(Request $request)
    {
        $dom = new \DOMDocument('1.0');
        $book = $dom->appendChild($dom->createElement('book'));
        $title = $book->appendChild($dom->createElement('title'));
        $title->appendChild($dom->createTextNode('PHP Cookbook'));
        $title->setAttribute('edition','3');

        $sklar = $book->appendChild($dom->createElement('author'));
        $sklar->appendChild($dom->createTextNode('Sklar'));
        $trachtenber = $book->appendChild($dom->createElement('author'));
        $trachtenber->appendChild($dom->createTextNode('Trachtenber'));

        $dom->formatOutput = true;
        echo $dom->saveXML();
        $a = simplexml_load_file($request->domain().'/xml/text.xml');
        echo $a->title['edition'];
    }
}