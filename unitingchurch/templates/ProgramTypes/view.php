<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramType $programType
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Program Type</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="programTypes view content">
            <h3><?= h($programType->program_type_name) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%">

            <tr>
                    <th><?= __('Program Type Name') ?></th>
                    <td><?= h($programType->program_type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Type ID') ?></th>
                    <td><?= $this->Number->format($programType->program_type_id) ?></td>
                </tr>
            </table>

        </div></div></div>
                </div>

            </div>

        </div>

        <div class="col-sm-4">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Program Types'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Program Type'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('Edit Program Type'), ['action' => 'edit', $programType->program_type_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Program Type'), ['action' => 'delete', $programType->program_type_id], ['confirm' => __('Are you sure you want to delete {0}?', $programType->program_type_name), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div></div>



</div>
<br>
