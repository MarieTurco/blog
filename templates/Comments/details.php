<h2>Détails du commentaire</h2>
<p>
    <span class="label">Auteur: <?= $this->Html->link($comment->user->pseudo,
            ['controller' => 'Users', 'action' => 'details', $comment->user->id]
        )?>
    </span>
</p>
<p>
    <span class="label">Post: <?= $this->Html->link($comment->post->title,
            ['controller' => 'Posts', 'action' => 'details', $comment->post->id]
        )?>
    </span>
</p>
<p><span class="label"><?= $comment->content ?></span></p>

<?= $this->Html->link('Retour à la liste des commentaires', ['controller' => 'Comments', 'action' => 'index']) ?>
