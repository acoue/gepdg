<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Passage Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $date_passage
 * @property int $selected
 * @property int $archive
 * @property string $display_name
 * @property int $region_id
 * @property int $discipline_id
 * @property int $grade_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Discipline $discipline
 * @property \App\Model\Entity\Evalue[] $evalues
 * @property \App\Model\Entity\InscriptionPassage[] $inscription_passages
 * @property \App\Model\Entity\Juge[] $juges
 * @property \App\Model\Entity\Note[] $notes
 */
class Passage extends Entity
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
        '*' => true,
        'id' => false
    ];
}
