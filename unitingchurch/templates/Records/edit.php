<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw fa-pen"></i> Edit Record</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="records form content">
            <?= $this->Form->create($record) ?>
            <fieldset>

                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('record_info');
                    echo $this->Form->control('record_date_time');
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

