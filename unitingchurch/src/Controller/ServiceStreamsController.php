<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ServiceStreams Controller
 *
 * @property \App\Model\Table\ServiceStreamsTable $ServiceStreams
 * @method \App\Model\Entity\ServiceStream[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceStreamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $serviceStreams = $this->ServiceStreams->find();
        $this->set(compact('serviceStreams'));
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
        $serviceStream = $this->ServiceStreams->get($id, [
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
        $serviceStream = $this->ServiceStreams->newEmptyEntity();
        if ($this->request->is('post')) {
            $serviceStream = $this->ServiceStreams->patchEntity($serviceStream, $this->request->getData());
            if ($this->ServiceStreams->save($serviceStream)) {
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
        $serviceStream = $this->ServiceStreams->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceStream = $this->ServiceStreams->patchEntity($serviceStream, $this->request->getData());
            if ($this->ServiceStreams->save($serviceStream)) {
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
        $serviceStream = $this->ServiceStreams->get($id);
        $this->ServiceStreams->ServiceTypes->deleteAll(['service_stream_id' => $id]);
        if ($this->ServiceStreams->delete($serviceStream)) {
            $this->Flash->success(__('The service stream has been deleted.'));
        } else {
            $this->Flash->error(__('The service stream could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
