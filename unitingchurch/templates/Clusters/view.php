<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cluster $cluster
 */
?>




<div class="col-xl-6 col-lg-7">
    <div class="card shadow mb-4">

        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">View Clusters</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                </a>

            </div>
        </div>

        <div class="card-body">

            <div class = "modal-body">
                <!--          -->
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
</div>


<aside class="column">
    <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('Edit Cluster'), ['action' => 'edit', $cluster->cluster_id], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->postLink(__('Delete Cluster'), ['action' => 'delete', $cluster->cluster_id], ['confirm' => __('Are you sure you want to delete # {0}?', $cluster->cluster_id), 'class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('List Clusters'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('New Cluster'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
</aside>
