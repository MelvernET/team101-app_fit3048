<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 * @var \Cake\Collection\CollectionInterface|string[] $programType
 * @var \Cake\Collection\CollectionInterface|string[] $group
 * @var \Cake\Collection\CollectionInterface|string[] $site
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Program'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="program form content">
            <?= $this->Form->create($program) ?>
            <fieldset>
                <legend><?= __('Add Program') ?></legend>
                <?php
                    echo $this->Form->control('program_type_id', ['options' => $programType]);
                    echo $this->Form->control('program_name');
                    echo $this->Form->control('program_manager');
                    echo $this->Form->control('group_id', ['options' => $group]);
                    echo $this->Form->control('site._ids', ['options' => $site]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
