<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>
<div class="container-fluid">

    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-plus"></i> Add New Record</h5>



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
            </fieldset><br>
            <?= $this->Form->button(__('Submit'), ['class' => 'button float-right btn btn-primary']) ?>
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


                        <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                        </aside>


                    </div></div></div></div>


    </div>
</div>
<br>
