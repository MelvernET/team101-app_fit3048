<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->program_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->program_id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->program_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programs view content">
            <h3><?= h($program->program_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Program Type') ?></th>
                    <td><?= $program->has('program_type') ? $this->Html->link($program->program_type->program_type_id, ['controller' => 'ProgramTypes', 'action' => 'view', $program->program_type->program_type_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Name') ?></th>
                    <td><?= h($program->program_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Manager') ?></th>
                    <td><?= h($program->program_manager) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cluster') ?></th>
                    <td><?= $program->has('cluster') ? $this->Html->link($program->cluster->cluster_id, ['controller' => 'Clusters', 'action' => 'view', $program->cluster->cluster_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Id') ?></th>
                    <td><?= $this->Number->format($program->program_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
