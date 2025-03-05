<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class UsersController extends AppController
{
    public function index(){
        $users = $this->Users->find('all');

        $this->set(compact('users'));
    }

    public function new(){
        $user = $this->Users->newEmptyEntity();

        //si on a recu les donénes
        if($this->request->is('post'))
        {

            //on place les infos données dans l'entité vide
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)){

                $this->Flash->success('The user has been saved.');
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            }

            $this->Flash->error('Error when saving the user');
        }

        $this->set(compact('user'));
    }

    public function details($id = null){
        $user = $this->Users->get($id, ['contain' => ['Posts', 'Comments']]);

        // pour créer un nouveau livre à un auteur
        $newPost = $this->Users->Posts->newEmptyEntity();

        $this->set(compact(['user', 'newPost']));
    }

}
