<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Todo Entity
 * 独自作成したEntity
 * @property int $id
 * @property string $todo
 * @property \Cake\I18n\Date $created
 */
class Todo extends Entity
{
    // アクセス許可するかどうかを設定している
    // 一括代入時のアクセスを許可するかどうかというものでここを　faleにしたからといって
    // プログラムから値を変更できなくなるものではないらしい
    // 一括変更ができなくなるだけのようだ
    protected array $_accessible = [
        'todo' => true,
        'is_done' => true,
        'modified' => true,
        'created' => true,
    ];
}
