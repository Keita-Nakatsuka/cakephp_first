<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reacttest Controller
 *
 * @method \App\Model\Entity\Reacttest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReacttestController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $reacttest = $this->paginate($this->Reacttest);

        $this->set(compact('reacttest'));
    }

    /**
     * View method
     *
     * @param string|null $id Reacttest id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reacttest = $this->Reacttest->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('reacttest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reacttest = $this->Reacttest->newEmptyEntity();
        if ($this->request->is('post')) {
            $reacttest = $this->Reacttest->patchEntity($reacttest, $this->request->getData());
            if ($this->Reacttest->save($reacttest)) {
                $this->Flash->success(__('The reacttest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reacttest could not be saved. Please, try again.'));
        }
        $this->set(compact('reacttest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reacttest id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reacttest = $this->Reacttest->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reacttest = $this->Reacttest->patchEntity($reacttest, $this->request->getData());
            if ($this->Reacttest->save($reacttest)) {
                $this->Flash->success(__('The reacttest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reacttest could not be saved. Please, try again.'));
        }
        $this->set(compact('reacttest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reacttest id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reacttest = $this->Reacttest->get($id);
        if ($this->Reacttest->delete($reacttest)) {
            $this->Flash->success(__('The reacttest has been deleted.'));
        } else {
            $this->Flash->error(__('The reacttest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
