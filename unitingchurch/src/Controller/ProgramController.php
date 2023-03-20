<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Program Controller
 *
 * @property \App\Model\Table\ProgramTable $Program
 * @method \App\Model\Entity\Program[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProgramType', 'Group'],
        ];
        $program = $this->paginate($this->Program);

        $this->set(compact('program'));
    }

    /**
     * View method
     *
     * @param string|null $id Program id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $program = $this->Program->get($id, [
            'contain' => ['ProgramType', 'Group', 'Site'],
        ]);

        $this->set(compact('program'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $program = $this->Program->newEmptyEntity();
        if ($this->request->is('post')) {
            $program = $this->Program->patchEntity($program, $this->request->getData());
            if ($this->Program->save($program)) {
                $this->Flash->success(__('The program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program could not be saved. Please, try again.'));
        }
        $programType = $this->Program->ProgramType->find('list', ['limit' => 200])->all();
        $group = $this->Program->Group->find('list', ['limit' => 200])->all();
        $site = $this->Program->Site->find('list', ['limit' => 200])->all();
        $this->set(compact('program', 'programType', 'group', 'site'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Program id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $program = $this->Program->get($id, [
            'contain' => ['Site'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $program = $this->Program->patchEntity($program, $this->request->getData());
            if ($this->Program->save($program)) {
                $this->Flash->success(__('The program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program could not be saved. Please, try again.'));
        }
        $programType = $this->Program->ProgramType->find('list', ['limit' => 200])->all();
        $group = $this->Program->Group->find('list', ['limit' => 200])->all();
        $site = $this->Program->Site->find('list', ['limit' => 200])->all();
        $this->set(compact('program', 'programType', 'group', 'site'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Program id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $program = $this->Program->get($id);
        if ($this->Program->delete($program)) {
            $this->Flash->success(__('The program has been deleted.'));
        } else {
            $this->Flash->error(__('The program could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
