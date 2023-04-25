<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceType $serviceType
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Service Type</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="serviceTypes view content">
            <h3 class="h3 headings"><?= h($serviceType->service_type_name) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%">

            <tr>
                    <th><?= __('Service Type Name') ?></th>
                    <td><?= h($serviceType->service_type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Stream') ?></th>
                    <td><?= $serviceType->has('service_stream') ? $this->Html->link($serviceType->service_stream->service_stream_name, ['controller' => 'ServiceStreams', 'action' => 'view', $serviceType->service_stream->service_stream_id]) : '' ?></td>
                </tr>

            </table>

        </div>
                        </div></div></div>


        </div>

    </div>

    <div class="col-sm-4">
        <div class="card" style="height: 100%;" >
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                <div class="card-body">


                    <?= $this->Html->link(__('List Service Types'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('New Service Type'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('Edit Service Type'), ['action' => 'edit', $serviceType->service_type_id], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Form->postLink(__('Delete Service Type'), ['action' => 'delete', $serviceType->service_type_id], ['confirm' => __('Are you sure you want to delete {0}?', $serviceType->service_type_name), 'class' => 'btn btn-primary btn-block']) ?>

                    </aside>


                </div></div></div></div></div>



</div>
<br>
