<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

//bakeしたBookmarkTableからコピペ
/**
 * Todo Model
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TodoTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('todo');
        $this->setDisplayField('todo');//表示用のカラムで１つしか設定できない
        $this->setDisplayField('is_done');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('todo')
            ->maxLength('todo', 1000)
            ->requirePresence('todo', 'create')
            ->notEmptyString('todo');
        
        $validator
            ->scalar('is_done')
            ->maxLength('is_done', 1000)
            ->requirePresence('is_done', 'create')
            ->notEmptyString('is_done');

        return $validator;
    }
}
