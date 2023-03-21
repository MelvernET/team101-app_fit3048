<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 * @var \Cake\Collection\CollectionInterface|string[] $programTypes
 * @var \Cake\Collection\CollectionInterface|string[] $clusters
 * @var \Cake\Collection\CollectionInterface|string[] $sites
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programs form content">
            <?= $this->Form->create($program) ?>
            <fieldset>
                <legend><?= __('Add Program') ?></legend>
                <?php
                    echo $this->Form->control('program_type_id', ['options' => $programTypes]);
                    echo $this->Form->control('program_name');
                    echo $this->Form->control('program_manager');
                    echo $this->Form->control('cluster_id', ['options' => $clusters]);
                    echo $this->Form->control('sites._ids', ['options' => $sites]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
