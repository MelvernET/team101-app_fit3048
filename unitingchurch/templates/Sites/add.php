<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Site $site
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 */

$formTemplate =
    [

        'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
        'input' => '<input type="{{type}}" name="{{name}}"  class="form-control" {{attrs}} />',
        'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
        'label' => '<label{{attrs}} class="form-label"> {{text}}</label>',
        'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
        'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
        'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
        'select' => '<select name="{{name}}" class="form-select" aria-label=".form-select-lg example" "{{attrs}}>{{content}}</select>',
        'selectedClass'=>'selected',
    ];

$this->Form->setTemplates($formTemplate);

?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-plus"></i> Add New Site</h5>



                    <div class="card-body">
                        <div class = "modal-body">

                            <div class="sites form content">
                                <?= $this->Form->create($site) ?>
                                <fieldset>

                                    <?php
                                    echo $this->Form->control('site_address');
                                    echo $this->Form->control('site_postcode');
                                    echo $this->Form->control('site_contact');
                                    echo $this->Form->control('site_contact_no');
                                    echo $this->Form->control('site_ph_no');
                                    echo $this->Form->control('site_contact_direct_ph_no');
                                    echo $this->Form->control('site_lga');
                                    echo $this->Form->control('site_dhhs_area');
                                    echo $this->Form->control('programs._ids', ['options' => $programs ,'label' => 'program name','class' => 'form-control']);



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


                        <?= $this->Html->link(__('List Sites'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        </aside>


                    </div></div></div></div>



    </div>

