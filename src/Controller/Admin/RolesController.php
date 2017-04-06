<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;
use Cake\Utility\Inflector;

class RolesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->viewBuilder()->layout('admin');
    }


     // INDEX METHOD
    public function index()
    {
        $this->set('title_for_layout', 'Profile');
        $this->set('roles', $this->paginate($this->Roles));
        $this->set('_serialize', ['roles']);
    }

   // VIEW
    public function details($id = null)
    {
        $role = $this->Roles->get($id, [
            'contain' => []
        ]);
        $this->set('role', $role);
        $this->set('_serialize', ['role']);

        $this->set('title_for_layout', $role->name);
    }

    // ADD
    public function add()
    {
        $this->set('title_for_layout', 'Add Profile');
        $role = $this->Roles->newEntity();
        $role = $this->Roles->patchEntity($role, $this->request->data);
        if ($this->request->is('post')) {

            if ($this->Roles->save($role)) {
                $this->Flash->success(__('Profile added successfully.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Error adding profile. Please try again.'));
            }
        }
        $this->set(compact('role'));
        $this->set('_serialize', ['role']);
    }

    // EDIT
    public function edit($id = null)
    {
        $this->set('title_for_layout', 'Profile Editor');
        $role = $this->Roles->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->data);
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('Profile edited successfully.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Error while editing this profile. Please try again.'));
            }
        }
        $this->set(compact('role'));
        $this->set('_serialize', ['role']);
    }

    // DELETE
    public function delete($id = null)
    {
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('Profile successfully removed.'));
        } else {
            $this->Flash->error(__('Error while deleting this profile. Please try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}