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
            <div class="related">
                <h4><?= __('Related Programs') ?></h4>
                <?php if (!empty($site->programs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Program Id') ?></th>
                            <th><?= __('Program Type Id') ?></th>
                            <th><?= __('Program Name') ?></th>
                            <th><?= __('Program Manager') ?></th>
                            <th><?= __('Cluster Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($site->programs as $programs) : ?>
                        <tr>
                            <td><?= h($programs->program_id) ?></td>
                            <td><?= h($programs->program_type_id) ?></td>
                            <td><?= h($programs->program_name) ?></td>
                            <td><?= h($programs->program_manager) ?></td>
                            <td><?= h($programs->cluster_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Programs', 'action' => 'view', $programs->program_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Programs', 'action' => 'edit', $programs->program_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programs', 'action' => 'delete', $programs->program_id], ['confirm' => __('Are you sure you want to delete # {0}?', $programs->program_id)]) ?>
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
