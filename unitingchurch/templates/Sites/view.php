<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Site $site
 */
?>
<div class="container">

    <div class="row">


        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-fw  fa-info"></i> View Site</h5>



                    <div class="card-body">
                        <div class = "modal-body">
                            <div class="sites view content">
                                <h3><?= h($site->site_name) ?></h3>
                                <table class="table table-bordered" id="dataTable" width="100%">
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
                                        <th><?= __('LGA') ?></th>
                                        <td><?= h($site->site_lga) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('DHHS Area') ?></th>
                                        <td><?= h($site->site_dhhs_area) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Site ID') ?></th>
                                        <td><?= $this->Number->format($site->site_id) ?></td>
                                    </tr>
                                </table>
                                <div class="related">
                                    <h4><?= __('Related Programs') ?></h4>
                                    <?php if (!empty($site->programs)) : ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%">
                                            <tr>
                                                <th><?= __('Program ID') ?></th>
                                                <th><?= __('Program Type ID') ?></th>
                                                <th><?= __('Program Name') ?></th>
                                                <th><?= __('Program Manager') ?></th>
                                                <th><?= __('Cluster ID') ?></th>
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
                                        <?php endif; ?>
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


                            <?= $this->Html->link(__('List Sites'), ['action' => 'index'], ['class'=>'btn btn-primary btn-block']) ?>
                            <br style="line-height:1px;" />
                            <?= $this->Html->link(__('New Site'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
                            <br style="line-height:1px;" />
                            <?= $this->Html->link(__('Edit Site'), ['action' => 'edit', $site->site_id], ['class' => 'btn btn-primary btn-block']) ?>
                            <br style="line-height:1px;" />
                            <?= $this->Form->postLink(__('Delete Site'), ['action' => 'delete', $site->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $site->site_id), 'class' => 'btn btn-primary btn-block']) ?>

                            </aside>


                        </div></div></div></div></div>



    </div>


