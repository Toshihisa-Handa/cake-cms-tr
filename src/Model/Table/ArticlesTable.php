<?php 

namespace App\Model\Table;

use Cake\ORM\Table;
// Text クラス
use Cake\Utility\Text;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
       $this->addBehavior('Timestamp');//このテーブルの created や modified カラムを自動的に更新する
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);
            // スラグをスキーマで定義されている最大長に調整
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

}


