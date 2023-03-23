<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Site $site
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 */
?>
<div class="row">
    <aside class="column">

        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sites'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>

    </aside>
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4" style='width: 35vw; height: 50vh;'>
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add New Site</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>

                </div>
            </div>

            <div class="card-body">


                <div class="sites form content">
                    <?= $this->Form->create($site) ?>
                    <fieldset>
                        <legend><?= __('Add Site') ?></legend>
                        <?php
                        echo $this->Form->control('site_address');
                        echo $this->Form->control('site_postcode');
                        echo $this->Form->control('site_contact');
                        echo $this->Form->control('site_contact_no');
                        echo $this->Form->control('site_ph_no');
                        echo $this->Form->control('site_contact_direct_ph_no');
                        echo $this->Form->control('site_lga');
                        echo $this->Form->control('site_dhhs_area');
                        echo $this->Form->control('programs._ids', ['options' => $programs ,'class' => 'form-control']);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>

            </div>
        </div>
    </div>
</div>

