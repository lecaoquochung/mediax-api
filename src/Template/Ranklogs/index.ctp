<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ranklog'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Keywords'), ['controller' => 'Keywords', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Engines'), ['controller' => 'Engines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Engine'), ['controller' => 'Engines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ranklogs index large-9 medium-8 columns content">
    <h3><?= __('Ranklogs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('keyword_id') ?></th>
                <th><?= $this->Paginator->sort('engine_id') ?></th>
                <th><?= $this->Paginator->sort('keyword') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th><?= $this->Paginator->sort('rank') ?></th>
                <th><?= $this->Paginator->sort('rankdate') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ranklogs as $ranklog): ?>
            <tr>
                <td><?= $this->Number->format($ranklog->id) ?></td>
                <td><?= $ranklog->has('keyword') ? $this->Html->link($ranklog->keyword->ID, ['controller' => 'Keywords', 'action' => 'view', $ranklog->keyword->ID]) : '' ?></td>
                <td><?= $ranklog->has('engine') ? $this->Html->link($ranklog->engine->ID, ['controller' => 'Engines', 'action' => 'view', $ranklog->engine->ID]) : '' ?></td>
                <td><?= h($ranklog->keyword) ?></td>
                <td><?= h($ranklog->url) ?></td>
                <td><?= h($ranklog->rank) ?></td>
                <td><?= h($ranklog->rankdate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ranklog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ranklog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ranklog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ranklog->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
