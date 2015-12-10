<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ranklogs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Keywords'), ['controller' => 'Keywords', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Engines'), ['controller' => 'Engines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Engine'), ['controller' => 'Engines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ranklogs form large-9 medium-8 columns content">
    <?= $this->Form->create($ranklog) ?>
    <fieldset>
        <legend><?= __('Add Ranklog') ?></legend>
        <?php
            echo $this->Form->input('keyword_id', ['options' => $keywords]);
            echo $this->Form->input('engine_id', ['options' => $engines]);
            echo $this->Form->input('keyword');
            echo $this->Form->input('url');
            echo $this->Form->input('rank');
            echo $this->Form->input('params');
            echo $this->Form->input('rankdate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
