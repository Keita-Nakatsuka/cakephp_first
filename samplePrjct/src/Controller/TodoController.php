<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Todo Controller
 * 独自作成のコントローラー
 * 基本はbake　したコントローラーからコピペ
 * 詳細表示のviewは不要、deleteも一旦不要なのでaddとeditだけ作成
 * @property \App\Model\Table\TodoTable $Bookmark
 */
class TodoController extends AppController
{
    /**
     * Index method
     *　TODO一覧表示
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        //ここでのTodoはModelのTodoが呼び出されている
        //具体的にはModel/Table/TodoTabel.php
        //コントローラーとモデルは自動で紐付けられるため継承やロードモデルをしなくても＄thisで呼び出せる
        //※命名規則に縛りがあるのはそのため
        $query = $this->Todo->find();
        $todo = $this->paginate($query);

        $this->set(compact('todo'));
    }


    /**
     * Add method
     *　TODO追加
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $todo = $this->Todo->newEmptyEntity();
        if ($this->request->is('post')) {
            $todo = $this->Todo->patchEntity($todo, $this->request->getData());
            if ($this->Todo->save($todo)) {
                $this->Flash->success(__('TODOが保存されました'));
                //この　indexはTODOの　indexになる
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('TODOの保存に失敗しました'));
        }
        $this->set(compact('todo'));
    }

    /**
     * Edit method
     *　TODO完了
     * @param string|null $id Todo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //！！変更で完了フラグをつけるためその処理を書かないといけなそう
        //↑必要なしでviewからフラグを送信するだけでよい

        $todo = $this->Todo->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $todo = $this->Todo->patchEntity($todo, $this->request->getData());
            if ($this->Todo->save($todo)) {
                $this->Flash->success(__('TODOが更新されました'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('TODO更新に失敗しました'));
        }
        $this->set(compact('todo'));
    }

}
