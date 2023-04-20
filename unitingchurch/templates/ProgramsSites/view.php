<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramsSite $programsSite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Programs Site'), ['action' => 'edit', $programsSite->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Programs Site'), ['action' => 'delete', $programsSite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programsSite->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Programs Sites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Programs Site'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programsSites view content">
            <h3><?= h($programsSite->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Program') ?></th>
                    <td><?= $programsSite->has('program') ? $this->Html->link($programsSite->program->Array, ['controller' => 'Programs', 'action' => 'view', $programsSite->program->program_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Site') ?></th>
                    <td><?= $programsSite->has('site') ? $this->Html->link($programsSite->site->Array, ['controller' => 'Sites', 'action' => 'view', $programsSite->site->site_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($programsSite->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
