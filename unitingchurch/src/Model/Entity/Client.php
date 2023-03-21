<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $client_id
 * @property string $client_first_name
 * @property string $client_last_name
 * @property string $client_location
 *
 * @property \App\Model\Entity\User[] $users
 */
class Client extends Entity
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
        'client_first_name' => true,
        'client_last_name' => true,
        'client_location' => true,
        'users' => true,
    ];
}
