<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 * @var \Cake\Collection\CollectionInterface|string[] $division
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Group'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="group form content">
            <?= $this->Form->create($group) ?>
            <fieldset>
                <legend><?= __('Add Group') ?></legend>
                <?php
                    echo $this->Form->control('group_name');
                    echo $this->Form->control('group_executive_manager');
                    echo $this->Form->control('divison_id', ['options' => $division]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
