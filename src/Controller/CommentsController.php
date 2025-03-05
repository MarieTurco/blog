<?php

namespace App\Controller;

class CommentsController extends AppController
{
    public function index(){
        $comments = $this->Comments->find('all')->contain(['Users', 'Posts']);

        $this->set(compact('comments'));
    }

    public function new(){
        $comment = $this->Comments->newEmptyEntity();

        //si on a recu les donénes
        if($this->request->is('post'))
        {
            //on place les infos données dans l'entité vide
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());

            if($this->Comments->save($comment)){

                $this->Flash->success('The comment has been published.');
                return $this->redirect(['controller' => 'Comments', 'action' => 'index']);
            }

            $this->Flash->error('Error when saving the comment');
        }

        $listUsers = $this->Comments->Users->find('list', [
            'keyField' => 'id',
            'valueField' => 'pseudo'
        ])->all();

        $this->set(compact(['comment', 'listUsers']));
    }

    public function details($id = null){
        $comment = $this->Comments->get($id, ['contain' => ['Users', 'Posts']]);
        $this->set(compact('comment'));
    }

}
