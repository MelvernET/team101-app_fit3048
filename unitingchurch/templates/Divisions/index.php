<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Division> $divisions
 */
?>
<div class="divisions index content">
    <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Divisions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('division_id') ?></th>
                    <th><?= $this->Paginator->sort('division_name') ?></th>
                    <th><?= $this->Paginator->sort('division_general_manager') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($divisions as $division): ?>
                <tr>
                    <td><?= $this->Number->format($division->division_id) ?></td>
                    <td><?= h($division->division_name) ?></td>
                    <td><?= h($division->division_general_manager) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $division->division_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $division->division_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $division->division_id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->division_id)]) ?>
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