<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property int $record_id
 * @property int $user_id
 * @property int $client_id
 * @property string $record_info
 * @property \Cake\I18n\FrozenTime $record_date_time
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 */
class Record extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'client_id' => true,
        'record_info' => true,
        'record_date_time' => true,
        'user' => true,
        'client' => true,
    ];
}
