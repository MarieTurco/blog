<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function index(){
        $posts = $this->Posts->find('all')->contain(['Users']);

        $this->set(compact('posts'));
    }

    public function new(){
        $post = $this->Posts->newEmptyEntity();

        //si on a recu les donénes
        if($this->request->is('post'))
        {
            //on place les infos données dans l'entité vide
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            if($this->Posts->save($post)){

                $this->Flash->success('The post has been saved.');
                return $this->redirect(['controller' => 'Posts', 'action' => 'index']);
            }

            $this->Flash->error('Error when saving the post');
        }

        $listUsers = $this->Posts->Users->find('list', [
            'keyField' => 'id',
            'valueField' => 'pseudo'
        ])->all();

        $this->set(compact(['post', 'listUsers']));
    }

    public function details($id = null){
        $post = $this->Posts->get($id, ['contain' => ['Users', 'Comments' => ['Users']]]);

        // pour créer un nouveau livre à un auteur
        $newComment = $this->Posts->Users->newEmptyEntity();

        $listUsers = $this->Posts->Users->find('list', [
            'keyField' => 'id',
            'valueField' => 'pseudo'
        ])->all();

        $this->set(compact(['post', 'newComment', 'listUsers']));

    }

}
