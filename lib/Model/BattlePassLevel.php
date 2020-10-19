<?php
/**
 * BattlePassLevel
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
 * Swagger Codegen version: 3.0.21
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
 * BattlePassLevel Class Doc Comment
 *
 * @category Class
 * @package  SCILL
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BattlePassLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BattlePassLevel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'battle_pass_level_id' => 'string',
'level_priority' => 'int',
'completed' => 'bool',
'can_claim' => 'bool',
'unlocked' => 'bool',
'claimed' => 'bool',
'reward_description' => 'string',
'reward_image' => 'string',
'reward_image_desktop' => 'string',
'challenges' => '\SCILL\Model\BattlePassLevelChallenge[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'battle_pass_level_id' => null,
'level_priority' => null,
'completed' => null,
'can_claim' => null,
'unlocked' => null,
'claimed' => null,
'reward_description' => null,
'reward_image' => null,
'reward_image_desktop' => null,
'challenges' => null    ];

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
        'battle_pass_level_id' => 'battle_pass_level_id',
'level_priority' => 'level_priority',
'completed' => 'completed',
'can_claim' => 'can_claim',
'unlocked' => 'unlocked',
'claimed' => 'claimed',
'reward_description' => 'reward_description',
'reward_image' => 'reward_image',
'reward_image_desktop' => 'reward_image_desktop',
'challenges' => 'challenges'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'battle_pass_level_id' => 'setBattlePassLevelId',
'level_priority' => 'setLevelPriority',
'completed' => 'setCompleted',
'can_claim' => 'setCanClaim',
'unlocked' => 'setUnlocked',
'claimed' => 'setClaimed',
'reward_description' => 'setRewardDescription',
'reward_image' => 'setRewardImage',
'reward_image_desktop' => 'setRewardImageDesktop',
'challenges' => 'setChallenges'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'battle_pass_level_id' => 'getBattlePassLevelId',
'level_priority' => 'getLevelPriority',
'completed' => 'getCompleted',
'can_claim' => 'getCanClaim',
'unlocked' => 'getUnlocked',
'claimed' => 'getClaimed',
'reward_description' => 'getRewardDescription',
'reward_image' => 'getRewardImage',
'reward_image_desktop' => 'getRewardImageDesktop',
'challenges' => 'getChallenges'    ];

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
        $this->container['battle_pass_level_id'] = isset($data['battle_pass_level_id']) ? $data['battle_pass_level_id'] : null;
        $this->container['level_priority'] = isset($data['level_priority']) ? $data['level_priority'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['can_claim'] = isset($data['can_claim']) ? $data['can_claim'] : null;
        $this->container['unlocked'] = isset($data['unlocked']) ? $data['unlocked'] : null;
        $this->container['claimed'] = isset($data['claimed']) ? $data['claimed'] : null;
        $this->container['reward_description'] = isset($data['reward_description']) ? $data['reward_description'] : null;
        $this->container['reward_image'] = isset($data['reward_image']) ? $data['reward_image'] : null;
        $this->container['reward_image_desktop'] = isset($data['reward_image_desktop']) ? $data['reward_image_desktop'] : null;
        $this->container['challenges'] = isset($data['challenges']) ? $data['challenges'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['battle_pass_level_id'] === null) {
            $invalidProperties[] = "'battle_pass_level_id' can't be null";
        }
        if ($this->container['level_priority'] === null) {
            $invalidProperties[] = "'level_priority' can't be null";
        }
        if ($this->container['completed'] === null) {
            $invalidProperties[] = "'completed' can't be null";
        }
        if ($this->container['can_claim'] === null) {
            $invalidProperties[] = "'can_claim' can't be null";
        }
        if ($this->container['unlocked'] === null) {
            $invalidProperties[] = "'unlocked' can't be null";
        }
        if ($this->container['claimed'] === null) {
            $invalidProperties[] = "'claimed' can't be null";
        }
        if ($this->container['reward_description'] === null) {
            $invalidProperties[] = "'reward_description' can't be null";
        }
        if ($this->container['reward_image'] === null) {
            $invalidProperties[] = "'reward_image' can't be null";
        }
        if ($this->container['reward_image_desktop'] === null) {
            $invalidProperties[] = "'reward_image_desktop' can't be null";
        }
        if ($this->container['challenges'] === null) {
            $invalidProperties[] = "'challenges' can't be null";
        }
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
     * Gets battle_pass_level_id
     *
     * @return string
     */
    public function getBattlePassLevelId()
    {
        return $this->container['battle_pass_level_id'];
    }

    /**
     * Sets battle_pass_level_id
     *
     * @param string $battle_pass_level_id Unique id of this BattlePassLevel object.
     *
     * @return $this
     */
    public function setBattlePassLevelId($battle_pass_level_id)
    {
        $this->container['battle_pass_level_id'] = $battle_pass_level_id;

        return $this;
    }

    /**
     * Gets level_priority
     *
     * @return int
     */
    public function getLevelPriority()
    {
        return $this->container['level_priority'];
    }

    /**
     * Sets level_priority
     *
     * @param int $level_priority The position of the level inside the stack of levels. Every level in this array will have this value incremented by 1.
     *
     * @return $this
     */
    public function setLevelPriority($level_priority)
    {
        $this->container['level_priority'] = $level_priority;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool $completed Indicates if this level is completed, i.e. all challenges have been completed.
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets can_claim
     *
     * @return bool
     */
    public function getCanClaim()
    {
        return $this->container['can_claim'];
    }

    /**
     * Sets can_claim
     *
     * @param bool $can_claim If all challenges in this level have been completed and can be claimed, this flag is true. I.e. show a “Claim Reward” button if this is true.
     *
     * @return $this
     */
    public function setCanClaim($can_claim)
    {
        $this->container['can_claim'] = $can_claim;

        return $this;
    }

    /**
     * Gets unlocked
     *
     * @return bool
     */
    public function getUnlocked()
    {
        return $this->container['unlocked'];
    }

    /**
     * Sets unlocked
     *
     * @param bool $unlocked Levels need to be unlocked one after the other. You can decide if you already want to show users the challenges waiting behind a locked challenge or if you hide them to make it more exciting for the user to unlock the next level.
     *
     * @return $this
     */
    public function setUnlocked($unlocked)
    {
        $this->container['unlocked'] = $unlocked;

        return $this;
    }

    /**
     * Gets claimed
     *
     * @return bool
     */
    public function getClaimed()
    {
        return $this->container['claimed'];
    }

    /**
     * Sets claimed
     *
     * @param bool $claimed Indicates if the reward for this level has already been claimed. Important: Users need to claim the reward to unlock the next level! Of course, you can also do that via REST-API automatically.
     *
     * @return $this
     */
    public function setClaimed($claimed)
    {
        $this->container['claimed'] = $claimed;

        return $this;
    }

    /**
     * Gets reward_description
     *
     * @return string
     */
    public function getRewardDescription()
    {
        return $this->container['reward_description'];
    }

    /**
     * Sets reward_description
     *
     * @param string $reward_description The description of the reward in the local language set in the request (see Setting Language). In the admin panel you can either create HTML content or plain text.
     *
     * @return $this
     */
    public function setRewardDescription($reward_description)
    {
        $this->container['reward_description'] = $reward_description;

        return $this;
    }

    /**
     * Gets reward_image
     *
     * @return string
     */
    public function getRewardImage()
    {
        return $this->container['reward_image'];
    }

    /**
     * Sets reward_image
     *
     * @param string $reward_image The mobile sized image name of the reward. For example you can use reward_image and reward_image_desktop to build a srcset in HTML or use and size them manually where you need them. This can be freely set in the Admin Panel. Either indicates a local asset via name or you can also use a URL.
     *
     * @return $this
     */
    public function setRewardImage($reward_image)
    {
        $this->container['reward_image'] = $reward_image;

        return $this;
    }

    /**
     * Gets reward_image_desktop
     *
     * @return string
     */
    public function getRewardImageDesktop()
    {
        return $this->container['reward_image_desktop'];
    }

    /**
     * Sets reward_image_desktop
     *
     * @param string $reward_image_desktop The desktop sized image name of the reward. Either indicates a local asset via name or you can also use a URL.
     *
     * @return $this
     */
    public function setRewardImageDesktop($reward_image_desktop)
    {
        $this->container['reward_image_desktop'] = $reward_image_desktop;

        return $this;
    }

    /**
     * Gets challenges
     *
     * @return \SCILL\Model\BattlePassLevelChallenge[]
     */
    public function getChallenges()
    {
        return $this->container['challenges'];
    }

    /**
     * Sets challenges
     *
     * @param \SCILL\Model\BattlePassLevelChallenge[] $challenges An array of BattlePassLevelChallenge objects.
     *
     * @return $this
     */
    public function setChallenges($challenges)
    {
        $this->container['challenges'] = $challenges;

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
