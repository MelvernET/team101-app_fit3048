<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cluster $cluster
 */
?>



<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Cluster</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="clusters view content">
                <!--          -->
                <h3 class="h3 headings"><?= h($cluster->cluster_name) ?></h3>
                            <table class="table table-bordered" id="dataTable" width="100%">
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
                        <td><?= $cluster->has('division') ? $this->Html->link($cluster->division->division_name, ['controller' => 'Divisions', 'action' => 'view', $cluster->division->division_id]) : '' ?></td>
                    </tr>

                </table>

                            </div>
                        </div></div></div>
            </div>

        </div>


        <div class="col-md-3">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Cluster'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Cluster'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('Edit Cluster'), ['action' => 'edit', $cluster->cluster_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Cluster'), ['action' => 'delete', $cluster->cluster_id], ['confirm' => __('Are you sure you want to delete {0}?', $cluster->cluster_name), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div>




        <br>














    </div></div>
