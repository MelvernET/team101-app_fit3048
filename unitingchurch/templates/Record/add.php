<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 * @var \Cake\Collection\CollectionInterface|string[] $user
 * @var \Cake\Collection\CollectionInterface|string[] $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Record'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="record form content">
            <?= $this->Form->create($record) ?>
            <fieldset>
                <legend><?= __('Add Record') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $user]);
                    echo $this->Form->control('client_id', ['options' => $client]);
                    echo $this->Form->control('record_info');
                    echo $this->Form->control('record_date_time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
