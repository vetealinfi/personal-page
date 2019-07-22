<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\FrozenDate $publishing_date
 * @property string $slug
 * @property string $body
 * @property string $photo
 * @property int $user_id
 * @property int $post_category_id
 * @property int $post_parent_id
 * @property int $post_type_id
 * @property string $post_type_detail
 * @property int $gallery_id
 * @property int $highlight
 * @property string $post_products
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\PostCategory $post_category
 * @property \App\Model\Entity\PostParent $post_parent
 * @property \App\Model\Entity\PostType $post_type
 * @property \App\Model\Entity\Gallery $gallery
 * @property \App\Model\Entity\Tag[] $tags
 */
class Post extends Entity
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
        'title' => true,
        'publishing_date' => true,
        'slug' => true,
        'body' => true,
        'photo' => true,
        'user_id' => true,
        'post_category_id' => true,
        'post_parent_id' => true,
        'post_type_id' => true,
        'post_type_detail' => true,
        'gallery_id' => true,
        'highlight' => true,
        'post_products' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'post_category' => true,
        'post_parent' => true,
        'post_type' => true,
        'gallery' => true,
        'tags' => true
    ];
}
