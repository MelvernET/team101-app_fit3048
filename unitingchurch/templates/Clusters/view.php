<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cluster $cluster
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cluster'), ['action' => 'edit', $cluster->cluster_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cluster'), ['action' => 'delete', $cluster->cluster_id], ['confirm' => __('Are you sure you want to delete # {0}?', $cluster->cluster_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clusters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cluster'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clusters view content">
            <h3><?= h($cluster->cluster_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cluster Name') ?></th>
                    <td><?= h($cluster->cluster_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cluster Executive Manager') ?></th>
                    <td><?= h($cluster->cluster_executive_manager) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division') ?></th>
                    <td><?= $cluster->has('division') ? $this->Html->link($cluster->division->division_id, ['controller' => 'Divisions', 'action' => 'view', $cluster->division->division_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cluster Id') ?></th>
                    <td><?= $this->Number->format($cluster->cluster_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
