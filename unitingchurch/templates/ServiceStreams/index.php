<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ServiceStream> $serviceStreams
 */
?>
<div class="serviceStreams index content">
    <?= $this->Html->link(__('New Service Stream'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Service Streams') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('service_stream_id') ?></th>
                    <th><?= $this->Paginator->sort('service_stream_name_') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($serviceStreams as $serviceStream): ?>
                <tr>
                    <td><?= $this->Number->format($serviceStream->service_stream_id) ?></td>
                    <td><?= h($serviceStream->service_stream_name_) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviceStream->service_stream_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceStream->service_stream_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceStream->service_stream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceStream->service_stream_id)]) ?>
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
