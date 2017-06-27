<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResultatPoules Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Licencies
 * @property \Cake\ORM\Association\BelongsTo $Competitions
 *
 * @method \App\Model\Entity\ResultatPoule get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResultatPoule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResultatPoule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResultatPoule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResultatPoule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResultatPoule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResultatPoule findOrCreate($search, callable $callback = null)
 */
class ResultatPoulesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('resultat_poules');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Licencies', [
            'foreignKey' => 'licencie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Competitions', [
            'foreignKey' => 'competition_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('numero_poule')
            ->requirePresence('numero_poule', 'create')
            ->notEmpty('numero_poule');

        $validator
            ->integer('classement')
            ->requirePresence('classement', 'create')
            ->notEmpty('classement');

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
        $rules->add($rules->existsIn(['licencie_id'], 'Licencies'));
        $rules->add($rules->existsIn(['competition_id'], 'Competitions'));

        return $rules;
    }
}
