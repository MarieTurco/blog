<?= $this->Html->link('Ajouter', ['action' => 'new'], ['class' => 'button float-right']) ?>


<h2>Liste des utilisateurs</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th><?= __('Pseudo') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td>
                <?= $this->Html->link($user->pseudo, ['controller' => 'Users', 'action' => 'details', $user->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
