<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->record_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->record_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="records view content">
            <h3><?= h($record->record_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $record->has('user') ? $this->Html->link($record->user->user_id, ['controller' => 'Users', 'action' => 'view', $record->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $record->has('client') ? $this->Html->link($record->client->client_id, ['controller' => 'Clients', 'action' => 'view', $record->client->client_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Info') ?></th>
                    <td><?= h($record->record_info) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Id') ?></th>
                    <td><?= $this->Number->format($record->record_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Date Time') ?></th>
                    <td><?= h($record->record_date_time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
