<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Logs'), ['controller' => 'Logs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Logs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sales Keywords'), ['controller' => 'SalesKeywords', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Keyword'), ['controller' => 'SalesKeywords', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Logs') ?></h4>
        <?php if (!empty($user->logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Log') ?></th>
                <th><?= __('Ip') ?></th>
                <th><?= __('Useragent') ?></th>
                <th><?= __('Mvc') ?></th>
                <th><?= __('Read') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->logs as $logs): ?>
            <tr>
                <td><?= h($logs->id) ?></td>
                <td><?= h($logs->user_id) ?></td>
                <td><?= h($logs->log) ?></td>
                <td><?= h($logs->ip) ?></td>
                <td><?= h($logs->useragent) ?></td>
                <td><?= h($logs->mvc) ?></td>
                <td><?= h($logs->read) ?></td>
                <td><?= h($logs->created) ?></td>
                <td><?= h($logs->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Logs', 'action' => 'edit', $logs->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Logs', 'action' => 'delete', $logs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logs->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sales Keywords') ?></h4>
        <?php if (!empty($user->sales_keywords)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Keyword Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Keyword') ?></th>
                <th><?= __('Rank') ?></th>
                <th><?= __('Sales') ?></th>
                <th><?= __('Cost') ?></th>
                <th><?= __('Profit') ?></th>
                <th><?= __('Limit') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->sales_keywords as $salesKeywords): ?>
            <tr>
                <td><?= h($salesKeywords->id) ?></td>
                <td><?= h($salesKeywords->keyword_id) ?></td>
                <td><?= h($salesKeywords->user_id) ?></td>
                <td><?= h($salesKeywords->keyword) ?></td>
                <td><?= h($salesKeywords->rank) ?></td>
                <td><?= h($salesKeywords->sales) ?></td>
                <td><?= h($salesKeywords->cost) ?></td>
                <td><?= h($salesKeywords->profit) ?></td>
                <td><?= h($salesKeywords->limit) ?></td>
                <td><?= h($salesKeywords->date) ?></td>
                <td><?= h($salesKeywords->created) ?></td>
                <td><?= h($salesKeywords->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalesKeywords', 'action' => 'view', $salesKeywords->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalesKeywords', 'action' => 'edit', $salesKeywords->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalesKeywords', 'action' => 'delete', $salesKeywords->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesKeywords->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
