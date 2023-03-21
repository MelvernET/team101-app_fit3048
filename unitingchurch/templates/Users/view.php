<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->user_id) ?></h3>
            <table>
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
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($user->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Client First Name') ?></th>
                            <th><?= __('Client Last Name') ?></th>
                            <th><?= __('Client Location') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->client_id) ?></td>
                            <td><?= h($clients->client_first_name) ?></td>
                            <td><?= h($clients->client_last_name) ?></td>
                            <td><?= h($clients->client_location) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->client_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->client_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->client_id)]) ?>
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
