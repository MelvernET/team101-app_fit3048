<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceType $serviceType
 * @var \Cake\Collection\CollectionInterface|string[] $serviceStreams
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Service Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceTypes form content">
            <?= $this->Form->create($serviceType) ?>
            <fieldset>
                <legend><?= __('Add Service Type') ?></legend>
                <?php
                    echo $this->Form->control('service_type_name');
                    echo $this->Form->control('service_stream_id', ['options' => $serviceStreams]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
