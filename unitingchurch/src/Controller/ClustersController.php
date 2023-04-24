<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clusters Controller
 *
 * @property \App\Model\Table\ClustersTable $Clusters
 * @method \App\Model\Entity\Cluster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClustersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $clusters = $this->Clusters->find()->contain(['Divisions']);
        $this->set(compact('clusters'));
    }

    /**
     * View method
     *
     * @param string|null $id Cluster id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cluster = $this->Clusters->get($id, [
            'contain' => ['Divisions'],
        ]);

        $this->set(compact('cluster'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cluster = $this->Clusters->newEmptyEntity();
        if ($this->request->is('post')) {
            $cluster = $this->Clusters->patchEntity($cluster, $this->request->getData());
            if ($this->Clusters->save($cluster)) {
                $this->Flash->success(__('The cluster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cluster could not be saved. Please, try again.'));
        }
        $divisions = $this->Clusters->Divisions->find('list', ['limit' => 200])->all();
        $this->set(compact('cluster', 'divisions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cluster id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cluster = $this->Clusters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cluster = $this->Clusters->patchEntity($cluster, $this->request->getData());
            if ($this->Clusters->save($cluster)) {
                $this->Flash->success(__('The cluster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cluster could not be saved. Please, try again.'));
        }
        $divisions = $this->Clusters->Divisions->find('list', ['limit' => 200])->all();
        $this->set(compact('cluster', 'divisions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cluster id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cluster = $this->Clusters->get($id);
        if ($this->Clusters->delete($cluster)) {
            $this->Flash->success(__('The cluster has been deleted.'));
        } else {
            $this->Flash->error(__('The cluster could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
