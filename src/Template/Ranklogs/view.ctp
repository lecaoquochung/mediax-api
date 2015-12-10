<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ranklog'), ['action' => 'edit', $ranklog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ranklog'), ['action' => 'delete', $ranklog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ranklog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ranklogs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ranklog'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Keywords'), ['controller' => 'Keywords', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Engines'), ['controller' => 'Engines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Engine'), ['controller' => 'Engines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ranklogs view large-9 medium-8 columns content">
    <h3><?= h($ranklog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Keyword') ?></th>
            <td><?= $ranklog->has('keyword') ? $this->Html->link($ranklog->keyword->ID, ['controller' => 'Keywords', 'action' => 'view', $ranklog->keyword->ID]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Engine') ?></th>
            <td><?= $ranklog->has('engine') ? $this->Html->link($ranklog->engine->ID, ['controller' => 'Engines', 'action' => 'view', $ranklog->engine->ID]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Keyword') ?></th>
            <td><?= h($ranklog->keyword) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($ranklog->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Rank') ?></th>
            <td><?= h($ranklog->rank) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ranklog->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Rankdate') ?></th>
            <td><?= h($ranklog->rankdate) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ranklog->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ranklog->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Params') ?></h4>
        <?= $this->Text->autoParagraph(h($ranklog->params)); ?>
    </div>
</div>
