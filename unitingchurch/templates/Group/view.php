<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->group_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->group_id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->group_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Group'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="group view content">
            <h3><?= h($group->group_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Group Name') ?></th>
                    <td><?= h($group->group_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Group Executive Manager') ?></th>
                    <td><?= h($group->group_executive_manager) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division') ?></th>
                    <td><?= $group->has('division') ? $this->Html->link($group->division->divison_id, ['controller' => 'Division', 'action' => 'view', $group->division->divison_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Group Id') ?></th>
                    <td><?= $this->Number->format($group->group_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
