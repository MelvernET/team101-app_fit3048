<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Record> $records
 */
?>
<div class="records index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Records') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Record</a>
    </div>
    <div class="table-responsive">

        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">

        <thead>
                <tr>
                    <th><?= $this->Paginator->sort('record_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
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
                    <td><?= h($record->record_date_time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $record->record_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->record_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->record_id], ['class' => 'btn btn-primary btn-sm', 'confirm' => __('Are you sure you want to delete {0}?', $record->record_name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>
