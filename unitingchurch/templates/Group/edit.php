<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 * @var string[]|\Cake\Collection\CollectionInterface $division
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $group->group_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $group->group_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Group'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="group form content">
            <?= $this->Form->create($group) ?>
            <fieldset>
                <legend><?= __('Edit Group') ?></legend>
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
