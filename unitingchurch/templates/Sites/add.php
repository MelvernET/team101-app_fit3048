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
            <?= $this->Html->link(__('List Sites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sites form content">
            <?= $this->Form->create($site) ?>
            <fieldset>
                <legend><?= __('Add Site') ?></legend>
                <?php
                    echo $this->Form->control('site_address');
                    echo $this->Form->control('site_postcode');
                    echo $this->Form->control('site_contact');
                    echo $this->Form->control('site_contact_no');
                    echo $this->Form->control('site_ph_no');
                    echo $this->Form->control('site_contact_direct_ph_no');
                    echo $this->Form->control('site_lga');
                    echo $this->Form->control('site_dhhs_area');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>