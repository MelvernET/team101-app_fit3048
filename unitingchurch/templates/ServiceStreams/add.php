<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceStream $serviceStream
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-plus"></i> Add New Service Stream</h5>



                    <div class="card-body">
                        <div class = "modal-body">

        <div class="serviceStreams form content">
            <?= $this->Form->create($serviceStream) ?>
            <fieldset>

                <?php
                    echo $this->Form->control('service_stream_name_');
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['class' => 'button float-right btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
                        </div></div></div>
            </div>



        </div>

        <div class="col-sm-4">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Service Streams'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        </aside>


                    </div></div></div></div>


    </div>
</div>
<br>
