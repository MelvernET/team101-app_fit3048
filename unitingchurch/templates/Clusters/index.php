<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cluster> $clusters
 */
?>
<div class="clusters index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Clusters') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Cluster</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('Cluster ID') ?></th>
                <th><?= $this->Paginator->sort('cluster_name') ?></th>
                <th><?= $this->Paginator->sort('cluster_executive_manager') ?></th>
                <th><?= $this->Paginator->sort('Division') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clusters as $cluster): ?>
                <tr>
                    <td><?= $this->Number->format($cluster->cluster_id) ?></td>
                    <td><?= h($cluster->cluster_name) ?></td>
                    <td><?= h($cluster->cluster_executive_manager) ?></td>
                    <td><?= $cluster->has('division') ? $this->Html->link($cluster->division->division_name, ['controller' => 'Divisions', 'action' => 'view', $cluster->division->division_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cluster->cluster_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cluster->cluster_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cluster->cluster_id], ['class' => 'btn btn-primary btn-sm', 'confirm' => __('Are you sure you want to delete {0}?', $cluster->cluster_name)]) ?>
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
