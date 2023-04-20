<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ServiceStream> $serviceStreams
 */
?>
<div class="serviceStreams index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Service Streams') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Service Stream</a>
    </div>
    <div class="table-responsive">

        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">

            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('service_stream_id') ?></th>
                    <th><?= $this->Paginator->sort('service_stream_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($serviceStreams as $serviceStream): ?>
                <tr>
                    <td><?= $this->Number->format($serviceStream->service_stream_id) ?></td>
                    <td><?= h($serviceStream->service_stream_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviceStream->service_stream_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceStream->service_stream_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceStream->service_stream_id], ['class' => 'btn btn-primary btn-sm', 'confirm' => __('Are you sure you want to delete {0}?', $serviceStream->service_stream_name)]) ?>
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
