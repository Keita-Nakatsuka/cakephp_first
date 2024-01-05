<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookmark Model
 *
 * @method \App\Model\Entity\Bookmark newEmptyEntity()
 * @method \App\Model\Entity\Bookmark newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Bookmark> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bookmark get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Bookmark findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Bookmark patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Bookmark> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bookmark|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Bookmark saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Bookmark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bookmark>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bookmark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bookmark> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bookmark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bookmark>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bookmark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bookmark> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BookmarkTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('bookmark');
        $this->setDisplayField('url');
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
            ->scalar('url')
            ->maxLength('url', 300)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->scalar('description')
            ->maxLength('description', 300)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
