<?php
/**
 * Created date 8/8/2018 8:19 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\sticker;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class StickerSet extends BaseModel
{
    protected $objectsArray = [
        'stickers' => [Sticker::class],
    ];

    /** @var string */
    public $name;

    /** @var string */
    public $title;

    /** @var bool */
    public $contains_masks = false;

    /** @var Sticker[] */
    public $stickers;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['name', 'title'], 'string'],
            [['contains_masks'], 'boolean'],
            [['stickers'], 'safe'],
        ]);
    }
}