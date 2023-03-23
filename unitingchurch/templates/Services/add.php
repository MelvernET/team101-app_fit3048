<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 * @var \Cake\Collection\CollectionInterface|string[] $serviceTypes
 */
?>
<div class="row">
    <aside class="column">


        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>

    </aside>
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4" style='width: 35vw; height: 50vh;'>
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add New Service</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>

                </div>
            </div>


            <div class="card-body">


                <div class="services form content">
                    <?= $this->Form->create($service) ?>
                    <fieldset>
                        <legend><?= __('Add Service') ?></legend>
                        <?php
                        echo $this->Form->control('service_description');
                        echo $this->Form->control('service_active_client');
                        echo $this->Form->control('service_staff_number');
                        echo $this->Form->control('service_fte');
                        echo $this->Form->control('service_riskman');
                        echo $this->Form->control('program_id', ['options' => $programs]);
                        echo $this->Form->control('service_type_id', ['options' => $serviceTypes]);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>


            </div>
        </div>
    </div>
</div>

