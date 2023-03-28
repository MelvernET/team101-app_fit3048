<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Record</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="records view content">
            <h3><?= h($record->record_id) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%">

            <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= h("ID: "),($record->has('user') ? $this->Html->link($record->user->user_id, ['controller' => 'Users', 'action' => 'view', $record->user->user_id]) : ''),(h(" , Name: ")),(h($record->user->user_first_name)),(h("  ")),(h($record->user->user_last_name)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= (h("ID: ")),($record->has('client') ? $this->Html->link($record->client->client_id, ['controller' => 'Clients', 'action' => 'view', $record->client->client_id]) : '' ),(h(" , Name: ")),(h($record->client->client_first_name)),(h("  ")),(h($record->client->client_last_name)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record ID') ?></th>
                    <td><?= $this->Number->format($record->record_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Date Time') ?></th>
                    <td><?= h($record->record_date_time) ?></td>


                <tr>
                <div class="text">
                    <th><?= __('Record Info') ?></th>
                    <blockquote>
                        <td>   <?= $this->Text->autoParagraph(h($record->record_info)); ?></td>
                    </blockquote>
                </div>

                </tr>
            </table>

        </div></div></div>
                </div>

            </div>

        </div>

        <div class="col-sm-4">
            <div class="card" style="height: 100%;" >
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                    <div class="card-body">


                        <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->record_id], ['class' => 'btn btn-primary btn-block']) ?>
                        <br style="line-height:1px;" />
                        <?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->record_id), 'class' => 'btn btn-primary btn-block']) ?>

                        </aside>


                    </div></div></div></div></div>



</div>
<br>




