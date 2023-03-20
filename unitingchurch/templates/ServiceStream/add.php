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
            <?= $this->Html->link(__('List Service Stream'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceStream form content">
            <?= $this->Form->create($serviceStream) ?>
            <fieldset>
                <legend><?= __('Add Service Stream') ?></legend>
                <?php
                    echo $this->Form->control('service_stream_name_');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
