<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Program Entity
 *
 * @property int $program_id
 * @property int $program_type_id
 * @property string $program_name
 * @property string $program_manager
 * @property int $cluster_id
 *
 * @property \App\Model\Entity\ProgramType $program_type
 * @property \App\Model\Entity\Cluster $cluster
 * @property \App\Model\Entity\Site[] $sites
 * @property \App\Model\Entity\Service[] $services
 */
class Program extends Entity
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
        'program_type_id' => true,
        'program_name' => true,
        'program_manager' => true,
        'cluster_id' => true,
        'program_type' => true,
        'cluster' => true,
        'sites' => true,
    ];
}
