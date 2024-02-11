<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Http\Response;
//use Cake\Controller\Component\RequestHandlerComponent;
use Cake\ORM\TableRegistry;


class JsoncreateController extends AppController
{
    //とりあえず取得できるか試したメソッド
    public function createJson()
    {
        //ビューレンダリングを無効化
        $this->autoRender = false;
        $this->loadModel('reacttest');
        $query = $this->reacttest->find();
        $query -> select(['title']);
        $query -> where(['id' => 1]);
        $result = $query->toArray();
        echo('SQLは'.$query.'です');
        echo('結果は'.$result[0]['title'].'です');
    }
    
    /**
     * Jsonを返すAPI
     */
    public function getReactTest()
    {
        //モデルロード
        $this->loadModel('reacttest');
        //　レンダリングOFF
        $this->autoRender = false;
        //レスポンス形式をJSON指定にする
        $this->response->withType('application/json');
        //DBからデータ取得
        $data = $this->reacttest->find('all')->toArray();
        //レスポンス書き出し
        $this->response->getBody()->write(json_encode($data));

    }
}