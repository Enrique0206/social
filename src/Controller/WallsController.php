<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Walls Controller
 *
 * @property \App\Model\Table\WallsTable $Walls
 *
 * @method \App\Model\Entity\Wall[] paginate($object = null, array $settings = [])
 */
class WallsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $walls = $this->paginate($this->Walls);

        $this->set(compact('walls'));
        $this->set('_serialize', ['walls']);
    }

    /**
     * View method
     *
     * @param string|null $id Wall id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wall = $this->Walls->get($id, [
            'contain' => ['Users', 'Posts']
        ]);

        $this->set('wall', $wall);
        $this->set('_serialize', ['wall']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wall = $this->Walls->newEntity();
        if ($this->request->is('post')) {
            $wall = $this->Walls->patchEntity($wall, $this->request->getData());
            if ($this->Walls->save($wall)) {
                $this->Flash->success(__('The wall has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wall could not be saved. Please, try again.'));
        }
        $users = $this->Walls->Users->find('list', ['limit' => 200]);
        $this->set(compact('wall', 'users'));
        $this->set('_serialize', ['wall']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wall id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wall = $this->Walls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wall = $this->Walls->patchEntity($wall, $this->request->getData());
            if ($this->Walls->save($wall)) {
                $this->Flash->success(__('The wall has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wall could not be saved. Please, try again.'));
        }
        $users = $this->Walls->Users->find('list', ['limit' => 200]);
        $this->set(compact('wall', 'users'));
        $this->set('_serialize', ['wall']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wall id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wall = $this->Walls->get($id);
        if ($this->Walls->delete($wall)) {
            $this->Flash->success(__('The wall has been deleted.'));
        } else {
            $this->Flash->error(__('The wall could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
