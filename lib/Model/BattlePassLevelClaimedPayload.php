<?php
/**
 * BattlePassLevelClaimedPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  SCILL
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SCILL API
 *
 * SCILL gives you the tools to activate, retain and grow your user base in your app or game by bringing you features well known in the gaming industry: Gamification. We take care of the services and technology involved so you can focus on your game and content.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@scillgame.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SCILL\Model;

use \ArrayAccess;
use \SCILL\ObjectSerializer;

/**
 * BattlePassLevelClaimedPayload Class Doc Comment
 *
 * @category Class
 * @description Payload sent via Webhook or realtime notifications whenever a usrs level reward has been claimed. Use this payload to unlock the item for the specified user.
 * @package  SCILL
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BattlePassLevelClaimedPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BattlePassLevelClaimedPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'webhook_type' => 'string',
'battle_pass_level_reward_claimed' => '\SCILL\Model\BattlePassLevelReward'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'webhook_type' => null,
'battle_pass_level_reward_claimed' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'webhook_type' => 'webhook_type',
'battle_pass_level_reward_claimed' => 'battle_pass_level_reward_claimed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook_type' => 'setWebhookType',
'battle_pass_level_reward_claimed' => 'setBattlePassLevelRewardClaimed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook_type' => 'getWebhookType',
'battle_pass_level_reward_claimed' => 'getBattlePassLevelRewardClaimed'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['webhook_type'] = isset($data['webhook_type']) ? $data['webhook_type'] : null;
        $this->container['battle_pass_level_reward_claimed'] = isset($data['battle_pass_level_reward_claimed']) ? $data['battle_pass_level_reward_claimed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets webhook_type
     *
     * @return string
     */
    public function getWebhookType()
    {
        return $this->container['webhook_type'];
    }

    /**
     * Sets webhook_type
     *
     * @param string $webhook_type The type of the notification. If you receive this payload, it's most likely battlepass-level-reward-claimed
     *
     * @return $this
     */
    public function setWebhookType($webhook_type)
    {
        $this->container['webhook_type'] = $webhook_type;

        return $this;
    }

    /**
     * Gets battle_pass_level_reward_claimed
     *
     * @return \SCILL\Model\BattlePassLevelReward
     */
    public function getBattlePassLevelRewardClaimed()
    {
        return $this->container['battle_pass_level_reward_claimed'];
    }

    /**
     * Sets battle_pass_level_reward_claimed
     *
     * @param \SCILL\Model\BattlePassLevelReward $battle_pass_level_reward_claimed battle_pass_level_reward_claimed
     *
     * @return $this
     */
    public function setBattlePassLevelRewardClaimed($battle_pass_level_reward_claimed)
    {
        $this->container['battle_pass_level_reward_claimed'] = $battle_pass_level_reward_claimed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
