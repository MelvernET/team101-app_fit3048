<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Record Controller
 *
 * @property \App\Model\Table\RecordTable $Record
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecordController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Client'],
        ];
        $record = $this->paginate($this->Record);

        $this->set(compact('record'));
    }

    /**
     * View method
     *
     * @param string|null $id Record id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $record = $this->Record->get($id, [
            'contain' => ['User', 'Client'],
        ]);

        $this->set(compact('record'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $record = $this->Record->newEmptyEntity();
        if ($this->request->is('post')) {
            $record = $this->Record->patchEntity($record, $this->request->getData());
            if ($this->Record->save($record)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $user = $this->Record->User->find('list', ['limit' => 200])->all();
        $client = $this->Record->Client->find('list', ['limit' => 200])->all();
        $this->set(compact('record', 'user', 'client'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Record id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $record = $this->Record->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $record = $this->Record->patchEntity($record, $this->request->getData());
            if ($this->Record->save($record)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $user = $this->Record->User->find('list', ['limit' => 200])->all();
        $client = $this->Record->Client->find('list', ['limit' => 200])->all();
        $this->set(compact('record', 'user', 'client'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Record id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->Record->get($id);
        if ($this->Record->delete($record)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
