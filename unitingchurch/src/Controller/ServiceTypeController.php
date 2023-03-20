<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ServiceType Controller
 *
 * @property \App\Model\Table\ServiceTypeTable $ServiceType
 * @method \App\Model\Entity\ServiceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ServiceStream'],
        ];
        $serviceType = $this->paginate($this->ServiceType);

        $this->set(compact('serviceType'));
    }

    /**
     * View method
     *
     * @param string|null $id Service Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviceType = $this->ServiceType->get($id, [
            'contain' => ['ServiceStream'],
        ]);

        $this->set(compact('serviceType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviceType = $this->ServiceType->newEmptyEntity();
        if ($this->request->is('post')) {
            $serviceType = $this->ServiceType->patchEntity($serviceType, $this->request->getData());
            if ($this->ServiceType->save($serviceType)) {
                $this->Flash->success(__('The service type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service type could not be saved. Please, try again.'));
        }
        $serviceStream = $this->ServiceType->ServiceStream->find('list', ['limit' => 200])->all();
        $this->set(compact('serviceType', 'serviceStream'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviceType = $this->ServiceType->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceType = $this->ServiceType->patchEntity($serviceType, $this->request->getData());
            if ($this->ServiceType->save($serviceType)) {
                $this->Flash->success(__('The service type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service type could not be saved. Please, try again.'));
        }
        $serviceStream = $this->ServiceType->ServiceStream->find('list', ['limit' => 200])->all();
        $this->set(compact('serviceType', 'serviceStream'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviceType = $this->ServiceType->get($id);
        if ($this->ServiceType->delete($serviceType)) {
            $this->Flash->success(__('The service type has been deleted.'));
        } else {
            $this->Flash->error(__('The service type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
