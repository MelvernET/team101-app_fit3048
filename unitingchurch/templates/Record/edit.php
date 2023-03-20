<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 * @var string[]|\Cake\Collection\CollectionInterface $user
 * @var string[]|\Cake\Collection\CollectionInterface $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $record->record_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $record->record_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Record'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="record form content">
            <?= $this->Form->create($record) ?>
            <fieldset>
                <legend><?= __('Edit Record') ?></legend>
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
