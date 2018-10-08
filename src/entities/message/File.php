<?php
/**
 * Created date 4/26/2018 12:13 AM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class File extends BaseModel
{
    /** @var string $file_id */
    public $file_id;

    /** @var integer $file_size */
    public $file_size;

    /**
     * Use https://api.telegram.org/file/bot<token>/<file_path> to get the file
     * @var string $file_path
     */
    public $file_path;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['file_id', 'file_path'], 'string'],
            [['file_size'], 'integer'],
        ]);
    }
}