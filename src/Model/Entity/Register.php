<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Bookmark[] $bookmarks
 */
class Register extends Entity
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
        'ip' => true,
        'local' => true,
        'cidade' => true,
        'cep' => true,
        'temperatura' => true,
        'tempo' => true,
        'humidade' => true,
        'vento' => true
    ];

}
?>