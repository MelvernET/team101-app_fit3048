<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Client> $client
 */
?>
<div class="client index content">
    <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Client') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('client_first_name') ?></th>
                    <th><?= $this->Paginator->sort('client_last_name') ?></th>
                    <th><?= $this->Paginator->sort('client_location') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->client_id) ?></td>
                    <td><?= h($client->client_first_name) ?></td>
                    <td><?= h($client->client_last_name) ?></td>
                    <td><?= h($client->client_location) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->client_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->client_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?>
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
