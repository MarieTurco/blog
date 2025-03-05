<h1><?= $user->pseudo ?> [inscrit depuis le <?= $user->created->i18nFormat('EEEE dd MMMM yyyy') ?>]</h1>

<h2>Posts</h2>

<?php if (!empty($user->posts)): ?>
    <ul>
        <?php foreach ($user->posts as $post):?>
            <li><?= $this->Html->link($post->title,
                    ['controller' => 'Posts', 'action' => 'details', $post->id]
                )?>
            </li>
        <?php endforeach;?>

    </ul>
<?php else: ?>
    <p>Aucun post associé à cet utilisateur.</p>
<?php endif; ?>

<?= $this->Html->link('Retour à la liste des utilisateurs', ['controller' => 'Users', 'action' => 'index']) ?>
