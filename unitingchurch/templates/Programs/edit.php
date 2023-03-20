<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 * @var string[]|\Cake\Collection\CollectionInterface $programTypes
 * @var string[]|\Cake\Collection\CollectionInterface $clusters
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $program->program_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $program->program_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programs form content">
            <?= $this->Form->create($program) ?>
            <fieldset>
                <legend><?= __('Edit Program') ?></legend>
                <?php
                    echo $this->Form->control('program_type_id', ['options' => $programTypes]);
                    echo $this->Form->control('program_name');
                    echo $this->Form->control('program_manager');
                    echo $this->Form->control('cluster_id', ['options' => $clusters]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
