<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PassagesFixture
 *
 */
class PassagesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_passage' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'selected' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'archive' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'display_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'region_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'discipline_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'region_passage_fk_idx' => ['type' => 'index', 'columns' => ['region_id'], 'length' => []],
            'discipline_fk_idx' => ['type' => 'index', 'columns' => ['discipline_id'], 'length' => []],
            'grade_id' => ['type' => 'index', 'columns' => ['grade_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discipline_passage_fk' => ['type' => 'foreign', 'columns' => ['discipline_id'], 'references' => ['disciplines', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'grade_passage_fk' => ['type' => 'foreign', 'columns' => ['grade_id'], 'references' => ['grades', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'region_passage_fk' => ['type' => 'foreign', 'columns' => ['region_id'], 'references' => ['regions', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'date_passage' => '2017-06-26',
            'selected' => 1,
            'archive' => 1,
            'display_name' => 'Lorem ipsum dolor sit amet',
            'region_id' => 1,
            'discipline_id' => 1,
            'grade_id' => 1,
            'created' => '2017-06-26 20:07:59',
            'modified' => '2017-06-26 20:07:59'
        ],
    ];
}
