<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Http\Response;
//use Cake\Controller\Component\RequestHandlerComponent;
use Cake\ORM\TableRegistry;

/**
 * Bookmark　テーブルからフロントへJsonを返すコントローラー
 */
class BookmarkJsonController extends AppController
{
    // public function initialize(): void
    // {
    //     parent::initialize();
    //     $this->loadComponent('RequestHandler');
    // }

    public function getSampleJson()
    {
        //ビューレンダリングを無効化
        $this->autoRender = false;
        //loadModelはcakephp４．３以降は非推奨らしい
        //$this->loadModel('Bookmark');↓代替の書き方
        $bookmarkTable = TableRegistry::getTableLocator()->get('bookmark');
        //loadModelではないモデル呼び出し方
        //$this->fetchTable('Bookmark');
        
        //Bookmarkテーブルから概要を取得
        $query = $bookmarkTable->find();
        //$query = $this->Bookmark->find();
        $query -> select(['created']);
        $query -> where(['id' => 2]);

        $result = $query->toArray();
        echo('SQLは'.$query.'です');
        echo('結果は'.$result.'です');
        //Json形式で出力
        //!!!→Jsonは検証ツールのレスポンスにでてくるようだがまだ確認できず
        $this->set(compact('result'));
        //$this->viewBuilder()->setOption('serialize', 'result');

        // ビューレンダリングを無効化
        //無効化しないとtempleteがないと言われてエラーが出てしまう
        //$this->viewBuilder()->setOption('serialize', true);
        //$this->viewBuilder()->setOption('jsonOptions', JSON_UNESCAPED_UNICODE);
        //$this->viewBuilder()->setOption('jsonOptions', JSON_PRETTY_PRINT);

        // レスポンスを返す
        echo('レスポンスは'.'です');
        return $this->response;

        // $this->set(compact('bookmark'));
        // //JSONを返すのは一旦ペンディング
        // $samples = $this->Samples->find();
        // $this->viewBuilder()->setClassName('Json');
        // $this->set('samples', $samples);
        // $this->set('_serialize', ['samples']);
    }

    public function test()
    {
        //自動レンダリングOFF
        $this->autoRender = false;
        $this->response = new Response();
        $this->response->type('application/json');
        $bookmarkTable = TableRegistry::getTableLocator()->get('bookmark');
        $query = $bookmarkTable->find();
        $query -> select(['created']);
        $query -> where(['id' => 2]);
        $result = $query->toArray();
        echo('SQLは'.$query.'です');
        //echo('結果は'.$result.'です');

        return $this->response->withStringBody(json_encode(''));

    }


}