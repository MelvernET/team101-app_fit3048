<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Program> $program
 */
?>
<div class="program index content">
    <?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Program') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('program_id') ?></th>
                    <th><?= $this->Paginator->sort('program_type_id') ?></th>
                    <th><?= $this->Paginator->sort('program_name') ?></th>
                    <th><?= $this->Paginator->sort('program_manager') ?></th>
                    <th><?= $this->Paginator->sort('group_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($program as $program): ?>
                <tr>
                    <td><?= $this->Number->format($program->program_id) ?></td>
                    <td><?= $program->has('program_type') ? $this->Html->link($program->program_type->program_type_id, ['controller' => 'ProgramType', 'action' => 'view', $program->program_type->program_type_id]) : '' ?></td>
                    <td><?= h($program->program_name) ?></td>
                    <td><?= h($program->program_manager) ?></td>
                    <td><?= $program->has('group') ? $this->Html->link($program->group->group_id, ['controller' => 'Group', 'action' => 'view', $program->group->group_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $program->program_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $program->program_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $program->program_id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->program_id)]) ?>
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
