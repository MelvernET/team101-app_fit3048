<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Divisions'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
    </aside>
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4" style='width: 35vw; height: 50vh;'>
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add New Division</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>

                </div>
            </div>


            <div class="card-body">


                <div class="divisions form content">
                    <?= $this->Form->create($division) ?>
                    <fieldset>
                        <legend><?= __('Add Division') ?></legend>
                        <?php
                        echo $this->Form->control('division_name');
                        echo $this->Form->control('division_general_manager');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>


            </div>
        </div>
    </div>
</div>
