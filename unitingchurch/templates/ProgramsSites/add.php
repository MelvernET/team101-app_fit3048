<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramsSite $programsSite
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 * @var \Cake\Collection\CollectionInterface|string[] $sites
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Programs Sites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programsSites form content">
            <?= $this->Form->create($programsSite) ?>
            <fieldset>
                <legend><?= __('Add Programs Site') ?></legend>
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
