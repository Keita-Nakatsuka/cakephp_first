<?php
declare(strict_types=1);
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\BadRequestException;
use Cake\Event\EventInterface;
use Cake\Http\Response;
//処理したいテーブルを呼び出す
use App\Model\Table\ReactTestTable;


class RequestgetController extends AppController{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler'); // 必要に応じて、RequestHandlerコンポーネントをロード
        $this->loadComponent('Paginator'); // 必要に応じて、Paginatorコンポーネントをロード
        //テーブルを初期化する
        $this->ReactTestTable = new ReactTestTable();
    }

    /**
     * フロントから送られてくるリクエストパラメータを受信して
     * DBに格納するメソット
     * 登録するテーブルはreact_server.react_test
     */
    public function index(){
        //ビューレンダリングを無効化
        $this->autoRender = false;
        if ($this->request->is('POST')) {
            $formData = $this->request->getData();
            // データベースに保存する処理をここに追加
            // 例えば、ORMを使用して保存する場合
            $entity = $this->ReactTestTable->newEmptyEntity();
            $entity = $this->ReactTestTable->patchEntity($entity, $formData);
            if ($this->ReactTestTable->save($entity)) {
                $this->set([
                    'success' => true,
                    'react_test' => $entity->toArray(),
                    '_serialize' => ['success', 'react_test']
                ]);
            } else {
                throw new BadRequestException('Failed to save data');
            }
        }

    }
}

