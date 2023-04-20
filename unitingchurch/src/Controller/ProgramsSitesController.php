<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProgramsSites Controller
 *
 * @property \App\Model\Table\ProgramsSitesTable $ProgramsSites
 * @method \App\Model\Entity\ProgramsSite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramsSitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programs', 'Sites'],
        ];
        $programsSites = $this->paginate($this->ProgramsSites);

        $this->set(compact('programsSites'));
    }

    /**
     * View method
     *
     * @param string|null $id Programs Site id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programsSite = $this->ProgramsSites->get($id, [
            'contain' => ['Programs', 'Sites'],
        ]);

        $this->set(compact('programsSite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programsSite = $this->ProgramsSites->newEmptyEntity();
        if ($this->request->is('post')) {
            $programsSite = $this->ProgramsSites->patchEntity($programsSite, $this->request->getData());
            if ($this->ProgramsSites->save($programsSite)) {
                $this->Flash->success(__('The programs site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programs site could not be saved. Please, try again.'));
        }
        $programs = $this->ProgramsSites->Programs->find('list', ['limit' => 200])->all();
        $sites = $this->ProgramsSites->Sites->find('list', ['limit' => 200])->all();
        $this->set(compact('programsSite', 'programs', 'sites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programs Site id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programsSite = $this->ProgramsSites->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programsSite = $this->ProgramsSites->patchEntity($programsSite, $this->request->getData());
            if ($this->ProgramsSites->save($programsSite)) {
                $this->Flash->success(__('The programs site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programs site could not be saved. Please, try again.'));
        }
        $programs = $this->ProgramsSites->Programs->find('list', ['limit' => 200])->all();
        $sites = $this->ProgramsSites->Sites->find('list', ['limit' => 200])->all();
        $this->set(compact('programsSite', 'programs', 'sites'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programs Site id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programsSite = $this->ProgramsSites->get($id);
        if ($this->ProgramsSites->delete($programsSite)) {
            $this->Flash->success(__('The programs site has been deleted.'));
        } else {
            $this->Flash->error(__('The programs site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
