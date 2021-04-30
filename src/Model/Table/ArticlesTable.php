<?php 

namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
       $this->addBehavior('Timestamp');//このテーブルの created や modified カラムを自動的に更新する
    }
}

