<?php
/**
 * Created date 5/5/2018 8:09 PM
 * @author Tsvetkov Alexander <ac@goldcarrot.ru>
 */

namespace tsvetkov\telegram_bot\entities;

use yii\base\Model;

abstract class BaseModel extends Model
{
    /**
     * Special array for converting standart json objects to object of needed class.
     * Keys of array os property names, values is class name for 'new' command.
     * All properties listed in this array sets as 'safe' in rules
     * For array of special object set array with class name as first element
     * Example:
     *
     * $objectsArray = [
     *   'message' => Message::class
     *   'from' => User::class
     *   'stickers' => [Stickers::class]
     * ];
     *
     * @var array
     */
    protected $objectsArray = [];

    /**
     * @param array $data
     * @param string $formName
     * @return bool
     */
    public function load($data, $formName = null)
    {
        if ($formName === null) {
            $formName = '';
        }
        $loaded = parent::load((array)$data, $formName);
        if (!$loaded) {
            return false;
        }
        foreach ((array)$this->objectsArray as $attribute => $class) {
            if (is_string($class)) {
                if ($this->$attribute != null && $class != null) {
                    $json = $this->$attribute;
                    $this->$attribute = new $class();
                    $this->$attribute->load($json);
                }
            } elseif (is_array($class)) {
                foreach ($this->$attribute as $key => $value) {
                    $json = $this->$attribute[$key];
                    $this->$attribute[$key] = new $class[0]();
                    $this->$attribute[$key]->load($json);
                }
            }

        }
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        $this->objectsArray = (array)$this->objectsArray;
        if (count($this->objectsArray) > 0) {
            return [
                [array_keys((array)$this->objectsArray), 'safe'],
            ];
        }
        return [];
    }
}