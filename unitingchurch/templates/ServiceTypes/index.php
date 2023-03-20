<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ServiceType> $serviceTypes
 */
?>
<div class="serviceTypes index content">
    <?= $this->Html->link(__('New Service Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Service Types') ?></h3>
    <div class="table-responsive">
        <table>
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
                    <td><?= $serviceType->has('service_stream') ? $this->Html->link($serviceType->service_stream->service_stream_id, ['controller' => 'ServiceStreams', 'action' => 'view', $serviceType->service_stream->service_stream_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviceType->service_type_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceType->service_type_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceType->service_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->service_type_id)]) ?>
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
