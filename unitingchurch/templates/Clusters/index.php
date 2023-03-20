<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cluster> $clusters
 */
?>
<div class="clusters index content">
    <?= $this->Html->link(__('New Cluster'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clusters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cluster_id') ?></th>
                    <th><?= $this->Paginator->sort('cluster_name') ?></th>
                    <th><?= $this->Paginator->sort('cluster_executive_manager') ?></th>
                    <th><?= $this->Paginator->sort('division_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clusters as $cluster): ?>
                <tr>
                    <td><?= $this->Number->format($cluster->cluster_id) ?></td>
                    <td><?= h($cluster->cluster_name) ?></td>
                    <td><?= h($cluster->cluster_executive_manager) ?></td>
                    <td><?= $cluster->has('division') ? $this->Html->link($cluster->division->division_id, ['controller' => 'Divisions', 'action' => 'view', $cluster->division->division_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cluster->cluster_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cluster->cluster_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cluster->cluster_id], ['confirm' => __('Are you sure you want to delete # {0}?', $cluster->cluster_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
