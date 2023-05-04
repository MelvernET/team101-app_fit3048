<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Programs Controller
 *
 * @property \App\Model\Table\ProgramsTable $Programs
 * @property \App\Model\Table\ServicesTable $Services
 * @method \App\Model\Entity\Program[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $programs = $this->Programs->find()->contain(['ProgramTypes', 'Clusters']);
        $this->set(compact('programs'));
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
        $program = $this->Programs->get($id, [
            'contain' => ['ProgramTypes', 'Clusters', 'Sites','Services'],
        ]);
        $services= $this->fetchTable('Services')->find()->toArray();

        $this->set(compact('program','services'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $program = $this->Programs->newEmptyEntity();
        if ($this->request->is('post')) {
            $program = $this->Programs->patchEntity($program, $this->request->getData());
            if ($this->Programs->save($program)) {
                $this->Flash->success(__('The program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program could not be saved. Please, try again.'));
        }
        $programTypes = $this->Programs->ProgramTypes->find('list', ['limit' => 200])->all();
        $clusters = $this->Programs->Clusters->find('list', ['limit' => 200])->all();
        $sites = $this->Programs->Sites->find('list', ['limit' => 1000])->all();
        $this->set(compact('program', 'programTypes', 'clusters', 'sites'));
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
        $program = $this->Programs->get($id, [
            'contain' => ['Sites'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $program = $this->Programs->patchEntity($program, $this->request->getData());
            if ($this->Programs->save($program)) {
                $this->Flash->success(__('The program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program could not be saved. Please, try again.'));
        }
        $programTypes = $this->Programs->ProgramTypes->find('list', ['limit' => 200])->all();
        $clusters = $this->Programs->Clusters->find('list', ['limit' => 200])->all();
        $sites = $this->Programs->Sites->find('list', ['limit' => 200])->all();
        $this->set(compact('program', 'programTypes', 'clusters', 'sites'));
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
        $program = $this->Programs->get($id, [
            'contain' => ['Services'],
        ]);
        $this->Programs->Services->deleteAll(['program_id' => $id]);

        if ($this->Programs->delete($program)) {
            $this->Flash->success(__('The program has been deleted.'));
        } else {
            $this->Flash->error(__('The program could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


//    public function filt($id){
//        $following = $this->getTableLocator()->get('Program_Site')->find()->contain('Lecturer')->where(['user'=>$id]);
//        $this->set('following',$following);
//        $following_count = $following->count();
//        $this->set('following_count', $following_count);
//        $prog = $this->getTableLocator()->get('Program')->find()->contain('Site')->where(['program_id'=>$id]);
//        $this->set('prog',$prog);
//    }
}
