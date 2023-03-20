<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->service_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->service_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services view content">
            <h3><?= h($service->service_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service Description') ?></th>
                    <td><?= h($service->service_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program') ?></th>
                    <td><?= $service->has('program') ? $this->Html->link($service->program->program_id, ['controller' => 'Programs', 'action' => 'view', $service->program->program_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Type') ?></th>
                    <td><?= $service->has('service_type') ? $this->Html->link($service->service_type->service_type_id, ['controller' => 'ServiceTypes', 'action' => 'view', $service->service_type->service_type_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Id') ?></th>
                    <td><?= $this->Number->format($service->service_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Active Client') ?></th>
                    <td><?= $this->Number->format($service->service_active_client) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Staff Number') ?></th>
                    <td><?= $this->Number->format($service->service_staff_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Fte') ?></th>
                    <td><?= $this->Number->format($service->service_fte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Riskman Id') ?></th>
                    <td><?= $this->Number->format($service->service_riskman_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
