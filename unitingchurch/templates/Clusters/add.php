<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cluster $cluster
 * @var \Cake\Collection\CollectionInterface|string[] $divisions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clusters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clusters form content">
            <?= $this->Form->create($cluster) ?>
            <fieldset>
                <legend><?= __('Add Cluster') ?></legend>
                <?php
                    echo $this->Form->control('cluster_name');
                    echo $this->Form->control('cluster_executive_manager');
                    echo $this->Form->control('division_id', ['options' => $divisions]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
