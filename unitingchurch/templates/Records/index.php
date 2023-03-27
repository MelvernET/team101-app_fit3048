<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Record> $records
 */
?>
<div class="records index content">
    <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Records') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('record_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('record_info') ?></th>
                    <th><?= $this->Paginator->sort('record_date_time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                <tr>
                    <td><?= $this->Number->format($record->record_id) ?></td>
                    <td><?= $record->has('user') ? $this->Html->link($record->user->user_id, ['controller' => 'Users', 'action' => 'view', $record->user->user_id]) : '' ?></td>
                    <td><?= $record->has('client') ? $this->Html->link($record->client->client_id, ['controller' => 'Clients', 'action' => 'view', $record->client->client_id]) : '' ?></td>
                    <td><?= h($record->record_info) ?></td>
                    <td><?= h($record->record_date_time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $record->record_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->record_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->record_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
