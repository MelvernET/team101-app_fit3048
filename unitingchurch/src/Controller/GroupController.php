<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Group Controller
 *
 * @property \App\Model\Table\GroupTable $Group
 * @method \App\Model\Entity\Group[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Division'],
        ];
        $group = $this->paginate($this->Group);

        $this->set(compact('group'));
    }

    /**
     * View method
     *
     * @param string|null $id Group id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $group = $this->Group->get($id, [
            'contain' => ['Division'],
        ]);

        $this->set(compact('group'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $group = $this->Group->newEmptyEntity();
        if ($this->request->is('post')) {
            $group = $this->Group->patchEntity($group, $this->request->getData());
            if ($this->Group->save($group)) {
                $this->Flash->success(__('The group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group could not be saved. Please, try again.'));
        }
        $division = $this->Group->Division->find('list', ['limit' => 200])->all();
        $this->set(compact('group', 'division'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Group id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $group = $this->Group->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $group = $this->Group->patchEntity($group, $this->request->getData());
            if ($this->Group->save($group)) {
                $this->Flash->success(__('The group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group could not be saved. Please, try again.'));
        }
        $division = $this->Group->Division->find('list', ['limit' => 200])->all();
        $this->set(compact('group', 'division'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Group id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $group = $this->Group->get($id);
        if ($this->Group->delete($group)) {
            $this->Flash->success(__('The group has been deleted.'));
        } else {
            $this->Flash->error(__('The group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
