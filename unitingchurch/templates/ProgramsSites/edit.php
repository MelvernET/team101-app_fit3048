<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramsSite $programsSite
 * @var string[]|\Cake\Collection\CollectionInterface $programs
 * @var string[]|\Cake\Collection\CollectionInterface $sites
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $programsSite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $programsSite->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Programs Sites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programsSites form content">
            <?= $this->Form->create($programsSite) ?>
            <fieldset>
                <legend><?= __('Edit Programs Site') ?></legend>
                <?php
                    echo $this->Form->control('program_id', ['options' => $programs]);
                    echo $this->Form->control('site_id', ['options' => $sites]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
