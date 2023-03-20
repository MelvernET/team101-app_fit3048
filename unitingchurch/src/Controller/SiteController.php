<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Site Controller
 *
 * @property \App\Model\Table\SiteTable $Site
 * @method \App\Model\Entity\Site[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SiteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $site = $this->paginate($this->Site);

        $this->set(compact('site'));
    }

    /**
     * View method
     *
     * @param string|null $id Site id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $site = $this->Site->get($id, [
            'contain' => ['Program'],
        ]);

        $this->set(compact('site'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $site = $this->Site->newEmptyEntity();
        if ($this->request->is('post')) {
            $site = $this->Site->patchEntity($site, $this->request->getData());
            if ($this->Site->save($site)) {
                $this->Flash->success(__('The site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site could not be saved. Please, try again.'));
        }
        $program = $this->Site->Program->find('list', ['limit' => 200])->all();
        $this->set(compact('site', 'program'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Site id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $site = $this->Site->get($id, [
            'contain' => ['Program'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $site = $this->Site->patchEntity($site, $this->request->getData());
            if ($this->Site->save($site)) {
                $this->Flash->success(__('The site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site could not be saved. Please, try again.'));
        }
        $program = $this->Site->Program->find('list', ['limit' => 200])->all();
        $this->set(compact('site', 'program'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Site id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $site = $this->Site->get($id);
        if ($this->Site->delete($site)) {
            $this->Flash->success(__('The site has been deleted.'));
        } else {
            $this->Flash->error(__('The site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
