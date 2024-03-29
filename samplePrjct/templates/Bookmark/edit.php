<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookmark->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bookmark'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bookmark form content">
            <?= $this->Form->create($bookmark) ?>
            <fieldset>
                <legend><?= __('Edit Bookmark') ?></legend>
                <?php
                    echo $this->Form->control('url');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
