<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 * @var \Cake\Collection\CollectionInterface|string[] $serviceTypes
 */


?>

<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-plus"></i> Add New Service</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="services form content">
                                <?= $this->Form->create($service) ?>
                                <fieldset>

                                    <?php
                                    echo $this->Form->control('service_description');
                                    echo $this->Form->control('service_active_client');
                                    echo $this->Form->control('service_staff_number');
                                    echo $this->Form->control('service_fte');
                                    echo $this->Form->control('service_riskman');
                                    echo $this->Form->control('program_id', ['options' => $programs]);
                                    echo $this->Form->control('service_type_id', ['options' => $serviceTypes]);
                                    ?>
                                </fieldset><br>
                                <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
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


                        <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        </aside>


                    </div></div></div></div>



    </div>
    <br>
