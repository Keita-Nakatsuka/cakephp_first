<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bookmark> $bookmark
 */
?>
<div class="todo index content">
    <?= $this->Html->link(__('TODO新規追加'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Todo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>完了チェック</th>
                    <th><?= $this->Paginator->sort('やることリスト') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todo as $todo): ?>
                <tr>
                    <td>
                        <!-- formhelperにボタンはないためHTMLでbuttonを記述する -->
                        <button onclick="location.href='<?= $this->Url->build(['action' => 'edit', $todo->id]) ?>'">
                        <?= __('完了する') ?>
                        </button>
                    </td>
                    <td><?= h($todo->todo) ?></td>
                    <td><?= h($todo->modified) ?></td>
                    <td><?= h($todo->created) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- ページング -->
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
