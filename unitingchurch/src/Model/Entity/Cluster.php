<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cluster Entity
 *
 * @property int $cluster_id
 * @property string $cluster_name
 * @property string $cluster_executive_manager
 * @property int $division_id
 *
 * @property \App\Model\Entity\Division $division
 */
class Cluster extends Entity
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
        'cluster_name' => true,
        'cluster_executive_manager' => true,
        'division_id' => true,
        'division' => true,
    ];
}
