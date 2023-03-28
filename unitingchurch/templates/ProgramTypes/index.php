<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProgramType> $programTypes
 */
?>
<div class="programTypes index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Program Types') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Program Type</a>
    </div>
    <div class="table-responsive">

        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">

            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('program_type_id') ?></th>
                    <th><?= $this->Paginator->sort('program_type_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programTypes as $programType): ?>
                <tr>
                    <td><?= $this->Number->format($programType->program_type_id) ?></td>
                    <td><?= h($programType->program_type_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $programType->program_type_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programType->program_type_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programType->program_type_id], ['class' => 'btn btn-primary btn-sm', 'confirm' => __('Are you sure you want to delete {0}?', $programType->program_type_name)]) ?>
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
