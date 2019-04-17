<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $info
 * @property string|null $description
 * @property string $image
 * @property float|null $value
 * @property string|null $sell_link
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Category $category
 */
class Product extends Entity
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
        'category_id' => true,
        'title' => true,
        'subtitle' => true,
        'info' => true,
        'description' => true,
        'image' => true,
        'value' => true,
        'sell_link' => true,
        'enabled' => true,
        'created' => true,
        'category' => true
    ];
}
