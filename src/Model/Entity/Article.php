<?php 
//エンティティーは、 データベースの１つのレコードを表し、データに対して行レベルの振る舞いを提供するもの

namespace App\Model\Entity;//このファイルのクラスに名前空間を作っている
use Cake\ORM\Entity;//この記述でこれ以下で「Entity」という記述で外部クラスEntityを呼び出せる。

class Article extends Entity
{
    protected $_accessible = [
      '*' => true,
      'id' => false,
      'slug' =>false,
    ];
}

