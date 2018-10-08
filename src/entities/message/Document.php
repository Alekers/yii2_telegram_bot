<?php
/**
 * Created date 4/25/2018 9:42 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class Document extends BaseModel
{
    public $objectsArray = [
        'thumb' => PhotoSize::class,
    ];

    /** @var string $file_id */
    public $file_id;

    /** @var PhotoSize $thumb */
    public $thumb;

    /** @var string $file_name */
    public $file_name;

    /** @var string $mime_type */
    public $mime_type;

    /** @var integer $file_size */
    public $file_size;

    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['file_id', 'file_name', 'mime_type'], 'string'],
            [['file_size'], 'integer'],
        ]);
    }
}