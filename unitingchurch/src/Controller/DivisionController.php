<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Division Controller
 *
 * @property \App\Model\Table\DivisionTable $Division
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DivisionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $division = $this->paginate($this->Division);

        $this->set(compact('division'));
    }

    /**
     * View method
     *
     * @param string|null $id Division id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $division = $this->Division->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('division'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $division = $this->Division->newEmptyEntity();
        if ($this->request->is('post')) {
            $division = $this->Division->patchEntity($division, $this->request->getData());
            if ($this->Division->save($division)) {
                $this->Flash->success(__('The division has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The division could not be saved. Please, try again.'));
        }
        $this->set(compact('division'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Division id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $division = $this->Division->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $division = $this->Division->patchEntity($division, $this->request->getData());
            if ($this->Division->save($division)) {
                $this->Flash->success(__('The division has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The division could not be saved. Please, try again.'));
        }
        $this->set(compact('division'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Division id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $division = $this->Division->get($id);
        if ($this->Division->delete($division)) {
            $this->Flash->success(__('The division has been deleted.'));
        } else {
            $this->Flash->error(__('The division could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
