<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InscriptionCompetitionsFixture
 *
 */
class InscriptionCompetitionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'commentaire' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'competition_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'licencie_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'licencie_fk_idx' => ['type' => 'index', 'columns' => ['licencie_id'], 'length' => []],
            'user_fk_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'competiton_fk_idx' => ['type' => 'index', 'columns' => ['competition_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'inscription_uk' => ['type' => 'unique', 'columns' => ['competition_id', 'licencie_id'], 'length' => []],
            'competition_inscription_fk' => ['type' => 'foreign', 'columns' => ['competition_id'], 'references' => ['competitions', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'licencie_inscription_fk' => ['type' => 'foreign', 'columns' => ['licencie_id'], 'references' => ['licencies', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'user_inscription_fk' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'commentaire' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'competition_id' => 1,
            'licencie_id' => 1,
            'user_id' => 1,
            'created' => '2016-12-11 16:10:22',
            'modified' => '2016-12-11 16:10:22'
        ],
    ];
}
