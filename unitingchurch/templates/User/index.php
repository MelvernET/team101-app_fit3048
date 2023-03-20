<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $user
 */
?>
<div class="user index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('user_first_name') ?></th>
                    <th><?= $this->Paginator->sort('user_last_name') ?></th>
                    <th><?= $this->Paginator->sort('user_email') ?></th>
                    <th><?= $this->Paginator->sort('user_password') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                    <td><?= h($user->user_first_name) ?></td>
                    <td><?= h($user->user_last_name) ?></td>
                    <td><?= h($user->user_email) ?></td>
                    <td><?= h($user->user_password) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
