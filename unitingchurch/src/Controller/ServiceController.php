<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Service Controller
 *
 * @property \App\Model\Table\ServiceTable $Service
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Program', 'ServiceType'],
        ];
        $service = $this->paginate($this->Service);

        $this->set(compact('service'));
    }

    /**
     * View method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $service = $this->Service->get($id, [
            'contain' => ['Program', 'ServiceType'],
        ]);

        $this->set(compact('service'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $service = $this->Service->newEmptyEntity();
        if ($this->request->is('post')) {
            $service = $this->Service->patchEntity($service, $this->request->getData());
            if ($this->Service->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $program = $this->Service->Program->find('list', ['limit' => 200])->all();
        $serviceType = $this->Service->ServiceType->find('list', ['limit' => 200])->all();
        $this->set(compact('service', 'program', 'serviceType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $service = $this->Service->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Service->patchEntity($service, $this->request->getData());
            if ($this->Service->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $program = $this->Service->Program->find('list', ['limit' => 200])->all();
        $serviceType = $this->Service->ServiceType->find('list', ['limit' => 200])->all();
        $this->set(compact('service', 'program', 'serviceType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Service->get($id);
        if ($this->Service->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
