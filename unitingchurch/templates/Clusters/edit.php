<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cluster $cluster
 * @var string[]|\Cake\Collection\CollectionInterface $divisions
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
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw fa-pen"></i> Edit Cluster</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="clusters view content">
            <?= $this->Form->create($cluster) ?>
            <fieldset>

                <?php
                    echo $this->Form->control('cluster_name');
                    echo $this->Form->control('cluster_executive_manager');
                    echo $this->Form->control('division_id', ['options' => $divisions]);
                ?>
            </fieldset>
                                <br>
                                <?= $this->Form->button(__('Submit'),['class' => 'button float-right btn btn-primary']) ?>

                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div></div></div></div>





        <div class="col-sm-4">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Cluster'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Cluster'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('View Cluster'), ['action' => 'view', $cluster->cluster_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Cluster'), ['action' => 'delete', $cluster->cluster_id], ['confirm' => __('Are you sure you want to delete {0}?', $cluster->cluster_name), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>

                    </div></div></div></div></div>



</div>
<br>
