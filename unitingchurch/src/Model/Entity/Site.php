<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Site Entity
 *
 * @property int $site_id
 * @property string $site_address
 * @property string $site_postcode
 * @property string $site_contact
 * @property string $site_contact_no
 * @property string $site_ph_no
 * @property string $site_contact_direct_ph_no
 * @property string $site_lga
 * @property string $site_dhhs_area
 */
class Site extends Entity
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
        'site_address' => true,
        'site_postcode' => true,
        'site_contact' => true,
        'site_contact_no' => true,
        'site_ph_no' => true,
        'site_contact_direct_ph_no' => true,
        'site_lga' => true,
        'site_dhhs_area' => true,
    ];
}
