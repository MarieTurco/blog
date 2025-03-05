<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{

    public function initialize(array $config): void{

        parent::initialize($config);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);

        $this->hasMany('Comments', [
            'foreignKey' => 'post_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->notEmptyString('title')
            ->maxLength('title', 100)
            ->minLength('title', 3)

            ->notEmptyString('content')
            ->minLength('content', 3)
            ->maxLength('content', 100000)

            ->notEmptyString('user_id');

        return $validator;
    }
}
