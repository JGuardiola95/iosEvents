<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attendees Controller
 *
 * @property \App\Model\Table\AttendeesTable $Attendees
 */
class AttendeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $attendees = $this->paginate($this->Attendees);

        $this->set(compact('attendees'));
        $this->set('_serialize', ['attendees']);
    }

    /**
     * View method
     *
     * @param string|null $id Attendee id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendee = $this->Attendees->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('attendee', $attendee);
        $this->set('_serialize', ['attendee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendee = $this->Attendees->newEntity();
        if ($this->request->is('post')) {
            $attendee = $this->Attendees->patchEntity($attendee, $this->request->data);
            if ($this->Attendees->save($attendee)) {
                $this->Flash->success(__('The attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The attendee could not be saved. Please, try again.'));
            }
        }
        $users = $this->Attendees->Users->find('list', ['limit' => 200]);
        $events = $this->Attendees->Events->find('list', ['limit' => 200]);
        $this->set(compact('attendee', 'users', 'events'));
        $this->set('_serialize', ['attendee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendee id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendee = $this->Attendees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendee = $this->Attendees->patchEntity($attendee, $this->request->data);
            if ($this->Attendees->save($attendee)) {
                $this->Flash->success(__('The attendee has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The attendee could not be saved. Please, try again.'));
            }
        }
        $users = $this->Attendees->Users->find('list', ['limit' => 200]);
        $events = $this->Attendees->Events->find('list', ['limit' => 200]);
        $this->set(compact('attendee', 'users', 'events'));
        $this->set('_serialize', ['attendee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendee id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendee = $this->Attendees->get($id);
        if ($this->Attendees->delete($attendee)) {
            $this->Flash->success(__('The attendee has been deleted.'));
        } else {
            $this->Flash->error(__('The attendee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
