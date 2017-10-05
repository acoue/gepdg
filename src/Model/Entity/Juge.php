<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Juge Entity
 *
 * @property int $id
 * @property int $passage_id
 * @property int $jury_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Passage $passage
 * @property \App\Model\Entity\Jury $jury
 * @property \App\Model\Entity\Note[] $notes
 */
class Juge extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'passage_id' => true,
        'jury_id' => true,
        'created' => true,
        'modified' => true,
        'passage' => true,
        'jury' => true,
        'notes' => true
    ];
}
