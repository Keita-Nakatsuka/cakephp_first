<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo $todo
 */
?>
<div class="row">
    <!-- サイドナビゲーション -->
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('TODOリスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    
    <div class="column column-80">
        <div class="todo form content">
            <?= $this->Form->create($todo) ?>
            <fieldset>
                <legend><?= __('Todo完了') ?></legend>
                <?= h($todo->todo) ?>
                <!-- パラメータの値を更新するにはこの記述 -->
                <?= $this->Form->control('is_done',['type'=>'hidden','value' => 1]) ?>
                <!-- ↑↓書き方はどちらでもOK -->
                <?php 
                    //echo $todo->todo; 
                ?>
            </fieldset>
            <?= $this->Form->button(__('TODO完了')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
