<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
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







<div class="col-xl-6 col-lg-7">
    <div class="card shadow mb-4">

        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">View Clients</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                </a>

            </div>
        </div>

        <div class="card-body">

            <div class = "modal-body">
<!--          -->
                <h3><?= __('Client Details:        ') ?></h3>
                <table>
                    <tr>
                        <th><?= __('Client Id') ?></th>
                        <td><?= $this->Number->format($client->client_id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Client First Name:    ') ?></th>
                        <td><?= h($client->client_first_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Client Last Name:    ') ?></th>
                        <td><?= h($client->client_last_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Client Location:    ') ?></th>
                        <td><?= h($client->client_location) ?></td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
</div>

<aside class="column">

    <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id), 'class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>

</aside>


