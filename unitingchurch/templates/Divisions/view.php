<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>

<div class="container-fluid">

    <div class="row">


        <div class="col-sm-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Division</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="divisions view content">
                <!--          -->
                <h3 class="h3 headings"><?= h($division->division_name) ?></h3>
                                <table class="table table-bordered" id="dataTable" width="100%">
                    <tr>
                        <th><?= __('Division Name') ?></th>
                        <td><?= h($division->division_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Division General Manager') ?></th>
                        <td><?= h($division->division_general_manager) ?></td>
                    </tr>

                </table>

                        </div>
                    </div></div></div>
        </div>

        </div>


        <div class="col-sm-3">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Division'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('Edit Division'), ['action' => 'edit', $division->division_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->division_id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->division_name), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div>


    <br>



</div></div>


