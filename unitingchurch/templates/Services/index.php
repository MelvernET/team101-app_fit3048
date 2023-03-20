<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Service> $services
 */
?>
<div class="services index content">
    <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Services') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= $this->Paginator->sort('service_description') ?></th>
                    <th><?= $this->Paginator->sort('service_active_client') ?></th>
                    <th><?= $this->Paginator->sort('service_staff_number') ?></th>
                    <th><?= $this->Paginator->sort('service_fte') ?></th>
                    <th><?= $this->Paginator->sort('service_riskman_id') ?></th>
                    <th><?= $this->Paginator->sort('program_id') ?></th>
                    <th><?= $this->Paginator->sort('service_type_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= $this->Number->format($service->service_id) ?></td>
                    <td><?= h($service->service_description) ?></td>
                    <td><?= $this->Number->format($service->service_active_client) ?></td>
                    <td><?= $this->Number->format($service->service_staff_number) ?></td>
                    <td><?= $this->Number->format($service->service_fte) ?></td>
                    <td><?= $this->Number->format($service->service_riskman_id) ?></td>
                    <td><?= $service->has('program') ? $this->Html->link($service->program->program_id, ['controller' => 'Programs', 'action' => 'view', $service->program->program_id]) : '' ?></td>
                    <td><?= $service->has('service_type') ? $this->Html->link($service->service_type->service_type_id, ['controller' => 'ServiceTypes', 'action' => 'view', $service->service_type->service_type_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $service->service_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->service_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->service_id)]) ?>
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
