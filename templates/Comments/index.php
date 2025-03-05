<?= $this->Html->link('Ajouter', ['action' => 'new'], ['class' => 'button float-right']) ?>


<h2>Liste des commentaires</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th><?= __('Commentaire') ?></th>
        <th><?= __('Post') ?></th>
        <th><?= __('Auteur') ?></th>
        <th><?= __('Publié le') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?= $comment->id ?></td>
            <td>
                <?= $this->Html->link($comment->content, ['controller' => 'Comments', 'action' => 'details', $comment->id]) ?>
            </td>
            <td>
                <?= $this->Html->link($comment->post->title, ['controller' => 'Posts', 'action' => 'details', $comment->post->id]) ?>
            </td>
            <td>
                <?= $this->Html->link($comment->user->pseudo, ['controller' => 'Users', 'action' => 'details', $comment->user->id]) ?>
            </td>
            <td><?= $comment->created ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
