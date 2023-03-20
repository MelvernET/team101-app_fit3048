<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $service_id
 * @property string $service_description
 * @property int $service_active_client
 * @property float $service_staff_number
 * @property float $service_fte
 * @property int $service_riskman_id
 * @property int $program_id
 * @property int $service_type_id
 *
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\ServiceType $service_type
 */
class Service extends Entity
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
        'service_description' => true,
        'service_active_client' => true,
        'service_staff_number' => true,
        'service_fte' => true,
        'service_riskman_id' => true,
        'program_id' => true,
        'service_type_id' => true,
        'program' => true,
        'service_type' => true,
    ];
}
