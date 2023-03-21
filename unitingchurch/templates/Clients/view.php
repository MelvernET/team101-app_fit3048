<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->client_id) ?></h3>
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
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
