<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 */
?>
<div class="row">
    <!-- 左ナビゲーション -->
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('TODO一覧'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="todo form content">
            <?= $this->Form->create($todo) ?>
            <fieldset>
                <legend><?= __('TODO新規追加') ?></legend>
                <?php
                    echo $this->Form->control('todo',['label' => 'TODO内容を記載してください']);
                ?>
            </fieldset>
            <!-- __()は翻訳関数で言語により自動で翻訳される。翻訳リストにない場合はそのまま表示される。なので多言語きにしなければ＿＿はつけなくてもOK -->
            <?= $this->Form->button(__('TODO登録する', ['type' => 'submit'])) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
