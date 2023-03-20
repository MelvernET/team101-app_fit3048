<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Site $site
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Site'), ['action' => 'edit', $site->site_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Site'), ['action' => 'delete', $site->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $site->site_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Site'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sites view content">
            <h3><?= h($site->site_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Site Address') ?></th>
                    <td><?= h($site->site_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Postcode') ?></th>
                    <td><?= h($site->site_postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Contact') ?></th>
                    <td><?= h($site->site_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Contact No') ?></th>
                    <td><?= h($site->site_contact_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Ph No') ?></th>
                    <td><?= h($site->site_ph_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Contact Direct Ph No') ?></th>
                    <td><?= h($site->site_contact_direct_ph_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Lga') ?></th>
                    <td><?= h($site->site_lga) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Dhhs Area') ?></th>
                    <td><?= h($site->site_dhhs_area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Id') ?></th>
                    <td><?= $this->Number->format($site->site_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
