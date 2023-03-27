<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceType $serviceType
 * @var string[]|\Cake\Collection\CollectionInterface $serviceStreams
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $serviceType->service_type_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->service_type_name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Service Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceTypes form content">
            <?= $this->Form->create($serviceType) ?>
            <fieldset>
                <legend><?= __('Edit Service Type') ?></legend>
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
