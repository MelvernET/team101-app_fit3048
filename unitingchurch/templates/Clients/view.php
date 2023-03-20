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
        </div>
    </div>
</div>
