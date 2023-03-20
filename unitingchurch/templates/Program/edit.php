<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 * @var string[]|\Cake\Collection\CollectionInterface $programType
 * @var string[]|\Cake\Collection\CollectionInterface $group
 * @var string[]|\Cake\Collection\CollectionInterface $site
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
            <?= $this->Html->link(__('List Program'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="program form content">
            <?= $this->Form->create($program) ?>
            <fieldset>
                <legend><?= __('Edit Program') ?></legend>
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
