<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceType $serviceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service Type'), ['action' => 'edit', $serviceType->service_type_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service Type'), ['action' => 'delete', $serviceType->service_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->service_type_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Service Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceTypes view content">
            <h3><?= h($serviceType->service_type_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service Type Name') ?></th>
                    <td><?= h($serviceType->service_type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Stream') ?></th>
                    <td><?= $serviceType->has('service_stream') ? $this->Html->link($serviceType->service_stream->service_stream_id, ['controller' => 'ServiceStreams', 'action' => 'view', $serviceType->service_stream->service_stream_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Type Id') ?></th>
                    <td><?= $this->Number->format($serviceType->service_type_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
