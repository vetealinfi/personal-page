<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostCategory Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $photo
 * @property string $description
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ParentPostCategory $parent_post_category
 * @property \App\Model\Entity\ChildPostCategory[] $child_post_categories
 * @property \App\Model\Entity\Post[] $posts
 */
class PostCategory extends Entity
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
        'name' => true,
        'slug' => true,
        'photo' => true,
        'description' => true,
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'created' => true,
        'modified' => true,
        'parent_post_category' => true,
        'child_post_categories' => true,
        'posts' => true
    ];
}
