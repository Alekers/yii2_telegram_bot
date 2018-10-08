<?php
/**
 * Created date 4/25/2018 10:57 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseModel;
use yii\helpers\ArrayHelper;

class Location extends BaseModel
{
    /** @var float $longitude */
    public $longitude;

    /** @var float $latitude */
    public $latitude;

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['longitude', 'latitude'], 'number'],
        ]);
    }
}