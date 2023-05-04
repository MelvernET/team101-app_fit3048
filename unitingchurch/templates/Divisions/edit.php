<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
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
    ];

$this->Form->setTemplates($formTemplate);

?>
<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw fa-pen"></i> Edit Division</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="divisions view content">
            <?= $this->Form->create($division) ?>
            <fieldset>

                <?php
                    echo $this->Form->control('division_name');
                    echo $this->Form->control('division_general_manager');
                ?>
            </fieldset>
                                <br>
                                <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>

                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div></div></div></div>





        <div class="col-md-3">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">



                        <?= $this->Html->link(__('List Division'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('View Division'), ['action' => 'view', $division->division_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->division_id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->division_name), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div></div>



</div>
<br>
