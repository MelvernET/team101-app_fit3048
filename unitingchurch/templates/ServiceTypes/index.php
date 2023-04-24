<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ServiceType> $serviceTypes
 */
?>
<div class="serviceTypes index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Service Types') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Service Type</a>
    </div>
    <div class="table-responsive">

        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">

            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('service_type_id') ?></th>
                    <th><?= $this->Paginator->sort('service_type_name') ?></th>
                    <th><?= $this->Paginator->sort('service_stream_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($serviceTypes as $serviceType): ?>
                <tr>
                    <td><?= $this->Number->format($serviceType->service_type_id) ?></td>
                    <td><?= h($serviceType->service_type_name) ?></td>
                    <td><?= $serviceType->has('service_stream') ? $this->Html->link($serviceType->service_stream->service_stream_name, ['controller' => 'ServiceStreams', 'action' => 'view', $serviceType->service_stream->service_stream_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviceType->service_type_id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceType->service_type_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceType->service_type_id], ['class' => 'btn btn-primary btn-sm', 'confirm' => __('Are you sure you want to delete {0}?', $serviceType->service_type_name)]) ?>
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
