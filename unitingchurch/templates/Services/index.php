<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Service> $services
 */


echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet', ['block' => true]);


?>
<div class="services index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Services') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Service</a>
    </div>
    <div class="table-responsive">

        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('Service ID') ?></th>
                <th><?= $this->Paginator->sort('Active Clients') ?></th>
                <th><?= $this->Paginator->sort('Staff Numbers (Head Count)') ?></th>
                <th><?= $this->Paginator->sort('FTE') ?></th>
                <th><?= $this->Paginator->sort('RiskMan ID') ?></th>
                <th><?= $this->Paginator->sort('Program') ?></th>
                <th><?= $this->Paginator->sort('Service Type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= $this->Number->format($service->service_id) ?></td>
                    <td><?= $this->Number->format($service->service_active_client) ?></td>
                    <td><?= $this->Number->format($service->service_staff_number) ?></td>
                    <td><?= $this->Number->format($service->service_fte) ?></td>
                    <td><?= h($service->service_riskman) ?></td>
                    <td><?= $service->has('program') ? $this->Html->link($service->program->program_id, ['controller' => 'Programs', 'action' => 'view', $service->program->program_id]) : '' ?></td>
                    <td><?= $service->has('service_type') ? $this->Html->link($service->service_type->service_type_id, ['controller' => 'ServiceTypes', 'action' => 'view', $service->service_type->service_type_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $service->service_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->service_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->service_id], ['class' => 'btn btn-primary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $service->service_id)]) ?>
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










