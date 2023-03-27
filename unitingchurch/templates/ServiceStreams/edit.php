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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $serviceStream->service_stream_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $serviceStream->service_stream_name_), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Service Streams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceStreams form content">
            <?= $this->Form->create($serviceStream) ?>
            <fieldset>
                <legend><?= __('Edit Service Stream') ?></legend>
                <?php
                    echo $this->Form->control('service_stream_name_');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
