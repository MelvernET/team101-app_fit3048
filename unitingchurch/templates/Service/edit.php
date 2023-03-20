<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 * @var string[]|\Cake\Collection\CollectionInterface $program
 * @var string[]|\Cake\Collection\CollectionInterface $serviceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $service->service_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $service->service_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Service'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="service form content">
            <?= $this->Form->create($service) ?>
            <fieldset>
                <legend><?= __('Edit Service') ?></legend>
                <?php
                    echo $this->Form->control('service_description');
                    echo $this->Form->control('service_active_client');
                    echo $this->Form->control('service_staff_number');
                    echo $this->Form->control('service_fte');
                    echo $this->Form->control('service_riskman_id');
                    echo $this->Form->control('program_id', ['options' => $program]);
                    echo $this->Form->control('service_type_id', ['options' => $serviceType]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
