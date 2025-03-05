<?= $this->Html->link('Ajouter', ['action' => 'new'], ['class' => 'button float-right']) ?>


<h2>Liste des posts</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th><?= __('Titre') ?></th>
        <th><?= __('Contenu') ?></th>
        <th><?= __('Auteur') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post->id ?></td>
            <td>
                <?= $this->Html->link($post->title, ['controller' => 'Posts', 'action' => 'details', $post->id]) ?>
            </td>
            <td><?= $post->content?></td>
            <td>
                <?= $this->Html->link($post->user->pseudo, ['controller' => 'Users', 'action' => 'details', $post->user->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
