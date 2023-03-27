<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Program</h5>



                    <div class="card-body">
                        <div class = "modal-body">
        <div class="programs view content">
            <h3><?= h($program->program_name) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%">
                <tr>
                    <th><?= __('Program Type') ?></th>
                    <td><?= $program->has('program_type') ? $this->Html->link($program->program_type->program_type_id, ['controller' => 'ProgramTypes', 'action' => 'view', $program->program_type->program_type_id]) : '' ?></td>
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
                    <th><?= __('Cluster') ?></th>
                    <td><?= $program->has('cluster') ? $this->Html->link($program->cluster->cluster_id, ['controller' => 'Clusters', 'action' => 'view', $program->cluster->cluster_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Program ID') ?></th>
                    <td><?= $this->Number->format($program->program_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sites') ?></h4>
                <?php if (!empty($program->sites)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%">
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
                        <?php foreach ($program->sites as $sites) : ?>
                        <tr>
                            <td><?= h($sites->site_id) ?></td>
                            <td><?= h($sites->site_address) ?></td>
                            <td><?= h($sites->site_postcode) ?></td>
                            <td><?= h($sites->site_contact) ?></td>
                            <td><?= h($sites->site_contact_no) ?></td>
                            <td><?= h($sites->site_ph_no) ?></td>
                            <td><?= h($sites->site_contact_direct_ph_no) ?></td>
                            <td><?= h($sites->site_lga) ?></td>
                            <td><?= h($sites->site_dhhs_area) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sites', 'action' => 'view', $sites->site_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sites', 'action' => 'edit', $sites->site_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sites', 'action' => 'delete', $sites->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sites->site_id)]) ?>
                            </td>
                        </tr>

                        <?php endforeach; ?>

                        <?php endif; ?>
                    </table>


                </div>
            </div></div></div>
                    </div>

                </div>

                </div>

                <div class="col-sm-4">
                    <div class="card" style="height: 100%;" >
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-fw  fa-link"></i> Actions</h5><br>
                            <div class="card-body">


                                <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                                <br style="line-height:1px;" />
                                <?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                                <br style="line-height:1px;" />
                                <?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->program_id], ['class' => 'btn btn-primary btn-block']) ?>
                                <br style="line-height:1px;" />
                                <?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->program_id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->program_id), 'class' => 'btn btn-primary btn-block']) ?>

                                </aside>


                            </div></div></div></div></div>



            </div>
            <br>










