<h1>Nouveau Commentaire</h1>

<?= $this->Form->create($comment) ?>
<?= $this->Form->control('content', ['label' => __('Titre')]) ?>
<?= $this->Form->control('user_id', ['options' => $listUsers, 'label' => __('Auteur')]) ?>


<?= $this->Form->button('Ajouter') ?>


<?= $this->Form->end() ?>



<h2>Liste des commentaires</h2>
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
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?= $comment->id ?></td>
            <td><?= $comment->content?></td>
            <td>
                <?= $this->Html->link($comment->user->pseudo, ['controller' => 'Users', 'action' => 'details', $comment->user->id]) ?>
            </td>
            <td><?= $comment->created?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
