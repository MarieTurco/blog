<h1>Nouveau Post</h1>

<?= $this->Form->create($post) ?>
<?= $this->Form->control('title', ['label' => __('Titre')]) ?>
<?= $this->Form->control('content', ['label' => __('Contenu')]) ?>
<?= $this->Form->control('user_id', ['options' => $listUsers, 'label' => __('Auteur')]) ?>


<?= $this->Form->button('Ajouter') ?>


<?= $this->Form->end() ?>
