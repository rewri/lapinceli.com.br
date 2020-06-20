<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductImagesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('product_images');
        $this->setDisplayField('image');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 150)
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', true);

        $validator
            ->scalar('image')
            ->maxLength('image', 150)
            ->requirePresence('image', 'create')
            ->allowEmptyString('image', true);

        $validator
            ->boolean('main')
            ->requirePresence('main', 'create')
            ->allowEmptyString('main', false);

        $validator
            ->boolean('enabled')
            ->requirePresence('enabled', 'create')
            ->allowEmptyString('enabled', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }

    public function getAll($enabled = true) {

        $query = $this->find('all')
            ->where(['enabled' => true])
            ->order(['rand()']);


        return $query->all();
    }
}
