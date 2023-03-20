<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ServiceStream Controller
 *
 * @property \App\Model\Table\ServiceStreamTable $ServiceStream
 * @method \App\Model\Entity\ServiceStream[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceStreamController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $serviceStream = $this->paginate($this->ServiceStream);

        $this->set(compact('serviceStream'));
    }

    /**
     * View method
     *
     * @param string|null $id Service Stream id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviceStream = $this->ServiceStream->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('serviceStream'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviceStream = $this->ServiceStream->newEmptyEntity();
        if ($this->request->is('post')) {
            $serviceStream = $this->ServiceStream->patchEntity($serviceStream, $this->request->getData());
            if ($this->ServiceStream->save($serviceStream)) {
                $this->Flash->success(__('The service stream has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service stream could not be saved. Please, try again.'));
        }
        $this->set(compact('serviceStream'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service Stream id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviceStream = $this->ServiceStream->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceStream = $this->ServiceStream->patchEntity($serviceStream, $this->request->getData());
            if ($this->ServiceStream->save($serviceStream)) {
                $this->Flash->success(__('The service stream has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service stream could not be saved. Please, try again.'));
        }
        $this->set(compact('serviceStream'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service Stream id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviceStream = $this->ServiceStream->get($id);
        if ($this->ServiceStream->delete($serviceStream)) {
            $this->Flash->success(__('The service stream has been deleted.'));
        } else {
            $this->Flash->error(__('The service stream could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
