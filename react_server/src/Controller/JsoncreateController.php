<?php
declare(strict_types=1);
namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Response;
//use Cake\Controller\Component\RequestHandlerComponent;
use Cake\ORM\TableRegistry;


class JsoncreateController extends AppController
{
    /**
     * CORSエラー対策でヘッダーに異なるオリジンからのリクエストを許可？する
     */
    public function beforeFilter(EventInterface $event)
    {
        // APIのエンドポイントでCORSヘッダーを追加
        parent::beforeFilter($event);
        $this->response = $this->response
            ->withHeader('Access-Control-Allow-Origin', '*') // すべてのオリジンからのリクエストを許可する場合
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS') // 許可するHTTPメソッド
            ->withHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization'); // 許可するヘッダー     
    }

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