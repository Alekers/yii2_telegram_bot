<?php
/**
 * Created date 4/25/2018 10:21 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\sticker;

use tsvetkov\telegram_bot\entities\BaseModel;
use tsvetkov\telegram_bot\entities\message\MaskPosition;
use tsvetkov\telegram_bot\entities\message\PhotoSize;
use yii\helpers\ArrayHelper;

class Sticker extends BaseModel
{
    public $objectsArray = [
        'thumb' => PhotoSize::class,
        'mask_position' => MaskPosition::class,
    ];

    /** @var string $file_id */
    public $file_id;

    /** @var integer $width */
    public $width;

    /** @var integer $height */
    public $height;

    /** @var PhotoSize $thumb */
    public $thumb;

    /** @var string $emoji */
    public $emoji;

    /** @var string $set_name */
    public $set_name;

    /** @var \tsvetkov\telegram_bot\entities\message\MaskPosition $mask_position */
    public $mask_position;

    /** @var integer $file_size */
    public $file_size;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['file_id', 'emoji', 'set_name'], 'string'],
            [['width', 'height', 'file_size'], 'integer'],
        ]);
    }
}