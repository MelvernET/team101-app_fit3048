<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Site> $sites
 */
?>
<div class="sites index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 headings"><?= __('Sites') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary"><i
                class="fas fa-solid fa-plus fa-sm text-white-50"></i> New Site</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover  table-light table-bordered" id="dataTable" width="100%">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('Site ID') ?></th>
                <th><?= $this->Paginator->sort('site_address') ?></th>
                <th><?= $this->Paginator->sort('site_postcode') ?></th>
                <th><?= $this->Paginator->sort('site_contact') ?></th>
                <th><?= $this->Paginator->sort('site_contact_no') ?></th>
                <th><?= $this->Paginator->sort('site_ph_no') ?></th>
                <th><?= $this->Paginator->sort('site_contact_direct_ph_no') ?></th>
                <th><?= $this->Paginator->sort('LGA') ?></th>
                <th><?= $this->Paginator->sort('DHHS Area') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sites as $site): ?>
                <tr>
                    <td><?= $this->Number->format($site->site_id) ?></td>
                    <td><?= h($site->site_address) ?></td>
                    <td><?= h($site->site_postcode) ?></td>
                    <td><?= h($site->site_contact) ?></td>
                    <td><?= h($site->site_contact_no) ?></td>
                    <td><?= h($site->site_ph_no) ?></td>
                    <td><?= h($site->site_contact_direct_ph_no) ?></td>
                    <td><?= h($site->site_lga) ?></td>
                    <td><?= h($site->site_dhhs_area) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $site->site_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $site->site_id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $site->site_id], ['class' => 'btn btn-primary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $site->site_id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>









