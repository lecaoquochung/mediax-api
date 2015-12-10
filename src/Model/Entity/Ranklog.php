<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ranklog Entity.
 *
 * @property int $id
 * @property int $keyword_id
 * @property \App\Model\Entity\Keyword $keyword
 * @property int $engine_id
 * @property \App\Model\Entity\Engine $engine
 * @property string $url
 * @property string $rank
 * @property string $params
 * @property \Cake\I18n\Time $rankdate
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Ranklog extends Entity
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
        'id' => false,
    ];
}
