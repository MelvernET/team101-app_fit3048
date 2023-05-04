<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $clients
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
        'selectMultiple' => '<select name="{{name}}[]" class="form-select" aria-label=".form-select-lg example"   multiple="multiple"{{attrs}}>{{content}}</select>',
        'selectedClass'=>'selected',
    ];

$this->Form->setTemplates($formTemplate);

?>

<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-plus"></i> Add New User</h5>



                    <div class="card-body">
                        <div class = "modal-body">


                            <div class="users form content">
                                <?= $this->Form->create($user) ?>
                                <fieldset>

                                    <?php
                                    echo $this->Form->control('user_first_name');
                                    echo $this->Form->control('user_last_name');
                                    echo $this->Form->control('email');
                                    echo $this->Form->control('password');
                                    ?>
                                </fieldset><br>
                                <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>
                                <?= $this->Form->end() ?>

                            </div>
                        </div></div></div>
            </div>



        </div>

        <div class="col-md-3">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        </aside>


                    </div></div></div></div>



    </div></div>
    <br>



