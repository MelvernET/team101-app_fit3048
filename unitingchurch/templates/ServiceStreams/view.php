<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceStream $serviceStream
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service Stream'), ['action' => 'edit', $serviceStream->service_stream_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service Stream'), ['action' => 'delete', $serviceStream->service_stream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceStream->service_stream_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Service Streams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service Stream'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceStreams view content">
            <h3><?= h($serviceStream->service_stream_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service Stream Name ') ?></th>
                    <td><?= h($serviceStream->service_stream_name_) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Stream Id') ?></th>
                    <td><?= $this->Number->format($serviceStream->service_stream_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
