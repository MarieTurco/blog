<h1><?= $post->title ?> [posté par <?= $this->Html->link($post->user->pseudo, ['controller' => 'Users', 'action' => 'details', $post->user->id]) ?>]</h1>

<h2></h2>

<p><span class="label"><?= $post->content ?></span></p>

<h2>Commentaires associés</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th><?= __('Commentaire') ?></th>
        <th><?= __('Auteur') ?></th>
        <th><?= __('Publié le') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($post->comments as $comment): ?>
        <tr>
            <td><?= $comment->id ?></td>
            <td><?= $comment->content ?></td>
            <td><?= $comment->user->pseudo ?></td>
            <td><?= $comment->created ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h2>Ajouter un commentaire</h2>
<?= $this->Form->create($newComment, ['url' => ['controller' => 'Comments', 'action' => 'new']]) ?>
<?= $this->Form->control('content', ['label' => __('Contenu')]) ?>
<?= $this->Form->control('user_id', ['options' => $listUsers, 'label' => __('Auteur')]) ?>
<?= $this->Form->control('post_id', ['type' => 'hidden', 'value' => $post->id, 'label' => __('Post')]) ?>


<?= $this->Form->button('Ajouter') ?>


<?= $this->Form->end() ?>



<?= $this->Html->link('Retour à la liste des posts', ['controller' => 'Posts', 'action' => 'index']) ?>
