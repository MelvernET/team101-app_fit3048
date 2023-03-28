<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Program> $programs
 */
?>
<div class="programs index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Programs') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Program</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('Program ID') ?></th>
                <th><?= $this->Paginator->sort('Program Type') ?></th>
                <th><?= $this->Paginator->sort('Program Name') ?></th>
                <th><?= $this->Paginator->sort('Program Manager') ?></th>
                <th><?= $this->Paginator->sort('Cluster') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($programs as $program): ?>
                <tr>
                    <td><?= $this->Number->format($program->program_id) ?></td>
                    <td><?= $program->has('program_type') ? $this->Html->link($program->program_type->program_type_id, ['controller' => 'ProgramTypes', 'action' => 'view', $program->program_type->program_type_id]) : '' ?></td>
                    <td><?= h($program->program_name) ?></td>
                    <td><?= h($program->program_manager) ?></td>
                    <td><?= $program->has('cluster') ? $this->Html->link($program->cluster->cluster_id, ['controller' => 'Clusters', 'action' => 'view', $program->cluster->cluster_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $program->program_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $program->program_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $program->program_id], ['class' => 'btn btn-primary btn-sm', 'confirm' => __('Are you sure you want to delete {0}?', $program->program_name)]) ?>
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
