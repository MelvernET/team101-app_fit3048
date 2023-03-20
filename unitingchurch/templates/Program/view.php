<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->program_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->program_id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->program_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Program'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="program view content">
            <h3><?= h($program->program_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Program Type') ?></th>
                    <td><?= $program->has('program_type') ? $this->Html->link($program->program_type->program_type_id, ['controller' => 'ProgramType', 'action' => 'view', $program->program_type->program_type_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Name') ?></th>
                    <td><?= h($program->program_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Manager') ?></th>
                    <td><?= h($program->program_manager) ?></td>
                </tr>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= $program->has('group') ? $this->Html->link($program->group->group_id, ['controller' => 'Group', 'action' => 'view', $program->group->group_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Id') ?></th>
                    <td><?= $this->Number->format($program->program_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Site') ?></h4>
                <?php if (!empty($program->site)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Site Id') ?></th>
                            <th><?= __('Site Address') ?></th>
                            <th><?= __('Site Postcode') ?></th>
                            <th><?= __('Site Contact') ?></th>
                            <th><?= __('Site Contact No') ?></th>
                            <th><?= __('Site Ph No') ?></th>
                            <th><?= __('Site Contact Direct Ph No') ?></th>
                            <th><?= __('Site Lga') ?></th>
                            <th><?= __('Site Dhhs Area') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($program->site as $site) : ?>
                        <tr>
                            <td><?= h($site->site_id) ?></td>
                            <td><?= h($site->site_address) ?></td>
                            <td><?= h($site->site_postcode) ?></td>
                            <td><?= h($site->site_contact) ?></td>
                            <td><?= h($site->site_contact_no) ?></td>
                            <td><?= h($site->site_ph_no) ?></td>
                            <td><?= h($site->site_contact_direct_ph_no) ?></td>
                            <td><?= h($site->site_lga) ?></td>
                            <td><?= h($site->site_dhhs_area) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Site', 'action' => 'view', $site->site_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Site', 'action' => 'edit', $site->site_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Site', 'action' => 'delete', $site->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $site->site_id)]) ?>
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
