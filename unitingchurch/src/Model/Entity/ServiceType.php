<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServiceType Entity
 *
 * @property int $service_type_id
 * @property string $service_type_name
 * @property int $service_stream_id
 *
 * @property \App\Model\Entity\ServiceStream $service_stream
 */
class ServiceType extends Entity
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
        'service_type_name' => true,
        'service_stream_id' => true,
        'service_stream' => true,
    ];
}
