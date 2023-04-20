<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProgramsSite> $programsSites
 */
?>
<div class="programsSites index content">
    <?= $this->Html->link(__('New Programs Site'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Programs Sites') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('program_id') ?></th>
                    <th><?= $this->Paginator->sort('site_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programsSites as $programsSite): ?>
                <tr>
                    <td><?= $this->Number->format($programsSite->id) ?></td>
                    <td><?= $programsSite->has('program') ? $this->Html->link($programsSite->program->Array, ['controller' => 'Programs', 'action' => 'view', $programsSite->program->program_id]) : '' ?></td>
                    <td><?= $programsSite->has('site') ? $this->Html->link($programsSite->site->Array, ['controller' => 'Sites', 'action' => 'view', $programsSite->site->site_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $programsSite->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programsSite->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programsSite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programsSite->id)]) ?>
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
