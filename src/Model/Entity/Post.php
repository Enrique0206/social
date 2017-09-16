<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property int $wall_id
 * @property int $user_id
 * @property string $content
 * @property \Cake\I18n\FrozenTime $date
 * @property string $ispublic
 *
 * @property \App\Model\Entity\Wall $wall
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Like[] $likes
 */
class Post extends Entity
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
