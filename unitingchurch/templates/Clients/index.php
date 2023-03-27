




<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Client> $clients
 */
?>
<div class="clients index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3  headings"><?= __('Clients') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Client</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('Client ID') ?></th>
                <th><?= $this->Paginator->sort('First Name') ?></th>
                <th><?= $this->Paginator->sort('Last Name') ?></th>
                <th><?= $this->Paginator->sort('Location') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->client_id) ?></td>
                    <td><?= h($client->client_first_name) ?></td>
                    <td><?= h($client->client_last_name) ?></td>
                    <td><?= h($client->client_location) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->client_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->client_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->client_id], ['class' => 'btn btn-primary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?>
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

