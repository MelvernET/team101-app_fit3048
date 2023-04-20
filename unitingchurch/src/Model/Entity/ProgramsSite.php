<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProgramsSite Entity
 *
 * @property int $id
 * @property int $program_id
 * @property int $site_id
 *
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\Site $site
 */
class ProgramsSite extends Entity
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
        'program_id' => true,
        'site_id' => true,
        'program' => true,
        'site' => true,
    ];
}
