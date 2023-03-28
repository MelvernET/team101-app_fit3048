<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View User</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="users view content">
            <h3><?= h($user->user_id) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%">

            <tr>
                    <th><?= __('User First Name') ?></th>
                    <td><?= h($user->user_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Last Name') ?></th>
                    <td><?= h($user->user_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                </tr>
            </table>

        </div>
                        </div></div></div>
            </div>



    </div>

    <div class="col-sm-4">
        <div class="card" style="height: 100%;" >
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                <div class="card-body">


                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'btn btn-primary btn-block']) ?>
                    <br style="line-height:1px;" />
                    <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete {0}?', $user->user_first_name), 'class' => 'btn btn-primary btn-block']) ?>

                    </aside>


                </div></div></div></div></div>



</div>
<br>






