<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $reactTest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit React Test'), ['action' => 'edit', $reacttest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete React Test'), ['action' => 'delete', $reacttest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reactTest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List React Test'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New React Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reactTest view content">
            <h3><?= h($reacttest->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($reacttest->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reacttest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($reacttest->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($reacttest->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
