<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity{
    protected array $_accessible = [
        'id' => false,
        '*' => true,
    ];
}
?>
