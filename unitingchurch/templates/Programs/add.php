<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 * @var \Cake\Collection\CollectionInterface|string[] $programTypes
 * @var \Cake\Collection\CollectionInterface|string[] $clusters
 * @var \Cake\Collection\CollectionInterface|string[] $sites
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



<legend><?= __('Add Program') ?></legend>
<div class="row">


    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">

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
                <div class = "modal-body">

                <div class="programs form content">
                    <?= $this->Form->create($program) ?>
                    <fieldset>

                        <?php
                        echo $this->Form->control('program_type_id', ['options' => $programTypes]);
                        echo $this->Form->control('program_name');
                        echo $this->Form->control('program_manager');
                        echo $this->Form->control('cluster_id', ['options' => $clusters]);
                        echo $this->Form->control('sites._ids', ['options' => $sites,'class' => 'form-control']);
                        ?>
                    </fieldset><br>
                    <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>
                </div>

            </div>
        </div>


        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class'=>'btn btn-primary']) ?>
        </aside>

        <br>        <br>
    </div>
</div>
