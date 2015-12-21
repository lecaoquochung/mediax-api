<div class="users form">
    <?= $this->Form->create('user',['url'=>'/api/users/token.json']) ?>
    <fieldset>
        <legend><?= __('Test API') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
    <p>Result:</p>
    <?php pr($this->request); ?>
</div>