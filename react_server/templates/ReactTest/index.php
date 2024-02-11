<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $reactTest
 */
?>
<div class="reactTest index content">
    <?= $this->Html->link(__('New React Test'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('React Test') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reacttest as $reacttest): ?>
                <tr>
                    <td><?= $this->Number->format($reacttest->id) ?></td>
                    <td><?= h($reacttest->title) ?></td>
                    <td><?= h($reacttest->created) ?></td>
                    <td><?= h($reacttest->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reacttest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reacttest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reacttest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reacttest->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
