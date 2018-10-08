<?php
/**
 * Created date 4/25/2018 10:02 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class PhotoSize extends BaseModel
{
    /** @var string $file_id */
    public $file_id;

    /** @var integer $width */
    public $width;

    /** @var integer $height */
    public $height;

    /** @var integer $file_size */
    public $file_size;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['file_size', 'width', 'height'], 'integer'],
            [['file_id'], 'string'],
        ]);
    }
}