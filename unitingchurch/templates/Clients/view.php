<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Client</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="clients view content">
            <h3><?= h($client->client_first_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client First Name') ?></th>
                    <td><?= h($client->client_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client Last Name') ?></th>
                    <td><?= h($client->client_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client Location') ?></th>
                    <td><?= h($client->client_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client Id') ?></th>
                    <td><?= $this->Number->format($client->client_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($client->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('User First Name') ?></th>
                            <th><?= __('User Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->users as $users) : ?>
                        <tr>
                            <td><?= h($users->user_id) ?></td>
                            <td><?= h($users->user_first_name) ?></td>
                            <td><?= h($users->user_last_name) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->user_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->user_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->user_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>

                <?php endif; ?>

                </div>
            </div></div></div>
                    </div>

                </div>


                <div class="col-sm-4">
                    <div class="card" style="height: 100%;" >
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                            <div class="card-body">


                                <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                                <br style="line-height:1px;" />
                                <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                                <br style="line-height:1px;" />
                                <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id], ['class' => 'btn btn-primary btn-block']) ?>
                                <br style="line-height:1px;" />
                                <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->clientr_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id), 'class' => 'btn btn-primary btn-block']) ?>

                                </aside>


                            </div></div></div></div>




                <br>
