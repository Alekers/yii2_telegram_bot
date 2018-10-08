<?php
/**
 * Created date 4/25/2018 10:11 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;


use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class Game extends BaseModel
{
    public $objectsArray = [
        'animation' => Animation::class,
    ];

    /** @var string $title */
    public $title;

    /** @var string $description */
    public $description;

    /** @var PhotoSize[] $photo */
    public $photo;

    /** @var string $text */
    public $text;

    /** @var MessageEntity[] $text_entities */
    public $text_entities;

    /** @var Animation $animation */
    public $animation;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['title', 'description', 'text'], 'string'],
            [['photo', 'text_entities'], 'safe'],
        ]);
    }
}