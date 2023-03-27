<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramType $programType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Program Type'), ['action' => 'edit', $programType->program_type_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Program Type'), ['action' => 'delete', $programType->program_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $programType->program_type_name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Program Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Program Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programTypes view content">
            <h3><?= h($programType->program_type_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Program Type Name') ?></th>
                    <td><?= h($programType->program_type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Type Id') ?></th>
                    <td><?= $this->Number->format($programType->program_type_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
