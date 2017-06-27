<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Passages Model
 *
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\DisciplinesTable|\Cake\ORM\Association\BelongsTo $Disciplines
 * @property |\Cake\ORM\Association\BelongsTo $Grades
 * @property \App\Model\Table\EvaluesTable|\Cake\ORM\Association\HasMany $Evalues
 * @property \App\Model\Table\InscriptionPassagesTable|\Cake\ORM\Association\HasMany $InscriptionPassages
 * @property \App\Model\Table\JugesTable|\Cake\ORM\Association\HasMany $Juges
 * @property \App\Model\Table\NotesTable|\Cake\ORM\Association\HasMany $Notes
 *
 * @method \App\Model\Entity\Passage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Passage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Passage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Passage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Passage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Passage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Passage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PassagesTable extends Table
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

        $this->setTable('passages');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Disciplines', [
            'foreignKey' => 'discipline_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grades', [
            'foreignKey' => 'grade_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Evalues', [
            'foreignKey' => 'passage_id'
        ]);
        $this->hasMany('InscriptionPassages', [
            'foreignKey' => 'passage_id'
        ]);
        $this->hasMany('Juges', [
            'foreignKey' => 'passage_id'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'passage_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('date_passage')
            ->requirePresence('date_passage', 'create')
            ->notEmpty('date_passage');

        $validator
            ->integer('selected')
            ->requirePresence('selected', 'create')
            ->notEmpty('selected');

        $validator
            ->integer('archive')
            ->requirePresence('archive', 'create')
            ->notEmpty('archive');

        $validator
            ->requirePresence('display_name', 'create')
            ->notEmpty('display_name');

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
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['discipline_id'], 'Disciplines'));
        $rules->add($rules->existsIn(['grade_id'], 'Grades'));

        return $rules;
    }
}
