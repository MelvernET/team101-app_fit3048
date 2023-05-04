<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 * @var string[]|\Cake\Collection\CollectionInterface $programs
 * @var string[]|\Cake\Collection\CollectionInterface $serviceTypes
 */

//$formTemplate =
//    [
//
//        'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
//        'input' => '<input type="{{type}}" name="{{name}}"  class="form-control" {{attrs}} />',
//        'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
//        'label' => '<label{{attrs}} class="form-label"> {{text}}</label>',
//        'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
//        'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
//        'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
//        'select' => '<select name="{{name}}" class="form-select" aria-label=".form-select-lg example" "{{attrs}}>{{content}}</select>',
//        'selectMultiple' => '<select name="{{name}}[]" class="form-select" aria-label=".form-select-lg example"   multiple="multiple"{{attrs}}>{{content}}</select>',
//        'selectedClass'=>'selected',
//    ];
//
//$this->Form->setTemplates($formTemplate);

?>
<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw fa-pen"></i> Edit Service</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="services view content">
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
                        </div>
                    </div></div></div></div>





        <div class="col-md-3">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('View Service'), ['action' => 'view', $service->service_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->service_id], ['confirm' => __('Are you sure you want to delete # this service: id {0}?', $service->service_id), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div></div>



</div>
<br>
