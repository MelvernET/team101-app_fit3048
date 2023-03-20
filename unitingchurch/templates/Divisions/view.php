<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Division'), ['action' => 'edit', $division->division_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->division_id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->division_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Divisions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="divisions view content">
            <h3><?= h($division->division_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Division Name') ?></th>
                    <td><?= h($division->division_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division General Manager') ?></th>
                    <td><?= h($division->division_general_manager) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division Id') ?></th>
                    <td><?= $this->Number->format($division->division_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
