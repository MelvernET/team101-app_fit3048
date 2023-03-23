<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 * @var \Cake\Collection\CollectionInterface|string[] $programTypes
 * @var \Cake\Collection\CollectionInterface|string[] $clusters
 * @var \Cake\Collection\CollectionInterface|string[] $sites
 */
?>



<div class="row">
    <aside class="column">

        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>


    </aside>
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4" style='width: 35vw; height: 50vh;'>
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add New Program</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>

                </div>
            </div>


            <div class="card-body">


                <div class="programs form content">
                    <?= $this->Form->create($program) ?>
                    <fieldset>
                        <legend><?= __('Add Program') ?></legend>
                        <?php
                        echo $this->Form->control('program_type_id', ['options' => $programTypes]);
                        echo $this->Form->control('program_name');
                        echo $this->Form->control('program_manager');
                        echo $this->Form->control('cluster_id', ['options' => $clusters]);
                        echo $this->Form->control('sites._ids', ['options' => $sites,'class' => 'form-control']);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>


            </div>
        </div>
    </div>
</div>
