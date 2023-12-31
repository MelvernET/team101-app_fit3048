<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceStream $serviceStream
 */
?>
<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Service Stream</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="serviceStreams view content">
            <h3 class="h3 headings"><?= h($serviceStream->service_stream_name) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%">

            <tr>
                    <th><?= __('Service Stream Name ') ?></th>
                    <td><?= h($serviceStream->service_stream_name) ?></td>
                </tr>
            </table>


                        </div></div></div>
            </div>

        </div>

    </div>

    <div class="col-md-3">
        <div class="card" style="height: 100%;" >
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                <div class="card-body">


                    <?= $this->Html->link(__('List Service Streams'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('New Service Stream'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('Edit Service Stream'), ['action' => 'edit', $serviceStream->service_stream_id], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Form->postLink(__('Delete Service Stream'), ['action' => 'delete', $serviceStream->service_stream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceStream->service_stream_name), 'class' => 'btn btn-primary btn-block']) ?>

                    </aside>


                </div></div></div></div></div>



</div>
<br>
