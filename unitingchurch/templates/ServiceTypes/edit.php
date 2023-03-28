<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceType $serviceType
 * @var string[]|\Cake\Collection\CollectionInterface $serviceStreams
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw fa-pen"></i> Edit Service Type</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="serviceTypes form content">
            <?= $this->Form->create($serviceType) ?>
            <fieldset>

                <?php
                    echo $this->Form->control('service_type_name');
                    echo $this->Form->control('service_stream_id', ['options' => $serviceStreams]);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>

            <?= $this->Form->end() ?>
        </div>
                        </div>
                    </div></div></div></div>





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
