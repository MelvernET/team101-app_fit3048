<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>

<div class="col-xl-6 col-lg-7">
    <div class="card shadow mb-4">

        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">View Divisions</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                </a>

            </div>
        </div>

        <div class="card-body">

            <div class = "modal-body">
                <!--          -->
                <h3><?= h($division->division_id) ?></h3>
                <table>
                    <tr>
                        <th><?= __('Division Name') ?></th>
                        <td><?= h($division->division_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Division General Manager') ?></th>
                        <td><?= h($division->division_general_manager) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Division Id') ?></th>
                        <td><?= $this->Number->format($division->division_id) ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>



<aside class="column">
    <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('Edit Division'), ['action' => 'edit', $division->division_id], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->division_id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->division_id), 'class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('List Divisions'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
</aside>
