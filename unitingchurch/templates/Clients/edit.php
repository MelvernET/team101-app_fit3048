<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var string[]|\Cake\Collection\CollectionInterface $users
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw fa-pen"></i> Edit Client</h5>



                    <div class="card-body">
                        <div class = "modal-body">

                            <div class="clients form content">
                                <?= $this->Form->create($client) ?>
                                <fieldset>

                                    <?php
                                    echo $this->Form->control('client_first_name');
                                    echo $this->Form->control('client_last_name');
                                    echo $this->Form->control('client_location');
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


                        <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('View Client'), ['action' => 'view', $client->client_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->clientr_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div></div>



</div>
