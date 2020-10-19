<?php
/**
 * Challenge
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
 * Challenge Class Doc Comment
 *
 * @category Class
 * @package  SCILL
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Challenge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Challenge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'challenge_id' => 'string',
'user_challenge_id' => 'string',
'challenge_name' => 'string',
'challenge_duration_time' => 'int',
'challenge_goal' => 'int',
'challenge_current_score' => 'int',
'challenge_icon' => 'string',
'challenge_icon_hd' => 'string',
'repeatable' => 'bool',
'type' => 'string',
'is_claimed' => 'bool',
'user_challenge_unlocked_at' => 'string',
'user_challenge_activated_at' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'challenge_id' => null,
'user_challenge_id' => null,
'challenge_name' => null,
'challenge_duration_time' => null,
'challenge_goal' => null,
'challenge_current_score' => null,
'challenge_icon' => null,
'challenge_icon_hd' => null,
'repeatable' => null,
'type' => null,
'is_claimed' => null,
'user_challenge_unlocked_at' => 'datestring',
'user_challenge_activated_at' => 'datestring'    ];

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
        'challenge_id' => 'challenge_id',
'user_challenge_id' => 'user_challenge_id',
'challenge_name' => 'challenge_name',
'challenge_duration_time' => 'challenge_duration_time',
'challenge_goal' => 'challenge_goal',
'challenge_current_score' => 'challenge_current_score',
'challenge_icon' => 'challenge_icon',
'challenge_icon_hd' => 'challenge_icon_hd',
'repeatable' => 'repeatable',
'type' => 'type',
'is_claimed' => 'is_claimed',
'user_challenge_unlocked_at' => 'user_challenge_unlocked_at',
'user_challenge_activated_at' => 'user_challenge_activated_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'challenge_id' => 'setChallengeId',
'user_challenge_id' => 'setUserChallengeId',
'challenge_name' => 'setChallengeName',
'challenge_duration_time' => 'setChallengeDurationTime',
'challenge_goal' => 'setChallengeGoal',
'challenge_current_score' => 'setChallengeCurrentScore',
'challenge_icon' => 'setChallengeIcon',
'challenge_icon_hd' => 'setChallengeIconHd',
'repeatable' => 'setRepeatable',
'type' => 'setType',
'is_claimed' => 'setIsClaimed',
'user_challenge_unlocked_at' => 'setUserChallengeUnlockedAt',
'user_challenge_activated_at' => 'setUserChallengeActivatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'challenge_id' => 'getChallengeId',
'user_challenge_id' => 'getUserChallengeId',
'challenge_name' => 'getChallengeName',
'challenge_duration_time' => 'getChallengeDurationTime',
'challenge_goal' => 'getChallengeGoal',
'challenge_current_score' => 'getChallengeCurrentScore',
'challenge_icon' => 'getChallengeIcon',
'challenge_icon_hd' => 'getChallengeIconHd',
'repeatable' => 'getRepeatable',
'type' => 'getType',
'is_claimed' => 'getIsClaimed',
'user_challenge_unlocked_at' => 'getUserChallengeUnlockedAt',
'user_challenge_activated_at' => 'getUserChallengeActivatedAt'    ];

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
        $this->container['challenge_id'] = isset($data['challenge_id']) ? $data['challenge_id'] : null;
        $this->container['user_challenge_id'] = isset($data['user_challenge_id']) ? $data['user_challenge_id'] : null;
        $this->container['challenge_name'] = isset($data['challenge_name']) ? $data['challenge_name'] : null;
        $this->container['challenge_duration_time'] = isset($data['challenge_duration_time']) ? $data['challenge_duration_time'] : null;
        $this->container['challenge_goal'] = isset($data['challenge_goal']) ? $data['challenge_goal'] : null;
        $this->container['challenge_current_score'] = isset($data['challenge_current_score']) ? $data['challenge_current_score'] : null;
        $this->container['challenge_icon'] = isset($data['challenge_icon']) ? $data['challenge_icon'] : null;
        $this->container['challenge_icon_hd'] = isset($data['challenge_icon_hd']) ? $data['challenge_icon_hd'] : null;
        $this->container['repeatable'] = isset($data['repeatable']) ? $data['repeatable'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_claimed'] = isset($data['is_claimed']) ? $data['is_claimed'] : null;
        $this->container['user_challenge_unlocked_at'] = isset($data['user_challenge_unlocked_at']) ? $data['user_challenge_unlocked_at'] : null;
        $this->container['user_challenge_activated_at'] = isset($data['user_challenge_activated_at']) ? $data['user_challenge_activated_at'] : null;
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
     * Gets challenge_id
     *
     * @return string
     */
    public function getChallengeId()
    {
        return $this->container['challenge_id'];
    }

    /**
     * Sets challenge_id
     *
     * @param string $challenge_id The unique id of this challenge. Every challenge is linked to a product.
     *
     * @return $this
     */
    public function setChallengeId($challenge_id)
    {
        $this->container['challenge_id'] = $challenge_id;

        return $this;
    }

    /**
     * Gets user_challenge_id
     *
     * @return string
     */
    public function getUserChallengeId()
    {
        return $this->container['user_challenge_id'];
    }

    /**
     * Sets user_challenge_id
     *
     * @param string $user_challenge_id If this challenge is unlocked (i.e. active see type) then this is the unique id of the challenge assiociated to the user. Otherwise this is 0 or empty.
     *
     * @return $this
     */
    public function setUserChallengeId($user_challenge_id)
    {
        $this->container['user_challenge_id'] = $user_challenge_id;

        return $this;
    }

    /**
     * Gets challenge_name
     *
     * @return string
     */
    public function getChallengeName()
    {
        return $this->container['challenge_name'];
    }

    /**
     * Sets challenge_name
     *
     * @param string $challenge_name The name of the challenge in the language set by the language parameter.
     *
     * @return $this
     */
    public function setChallengeName($challenge_name)
    {
        $this->container['challenge_name'] = $challenge_name;

        return $this;
    }

    /**
     * Gets challenge_duration_time
     *
     * @return int
     */
    public function getChallengeDurationTime()
    {
        return $this->container['challenge_duration_time'];
    }

    /**
     * Sets challenge_duration_time
     *
     * @param int $challenge_duration_time The duration of the challenge in seconds. Challenges auto lock after time-out and need to be unlocked again.
     *
     * @return $this
     */
    public function setChallengeDurationTime($challenge_duration_time)
    {
        $this->container['challenge_duration_time'] = $challenge_duration_time;

        return $this;
    }

    /**
     * Gets challenge_goal
     *
     * @return int
     */
    public function getChallengeGoal()
    {
        return $this->container['challenge_goal'];
    }

    /**
     * Sets challenge_goal
     *
     * @param int $challenge_goal Indicates how many “tasks” must be completed or done to complete this challenge.
     *
     * @return $this
     */
    public function setChallengeGoal($challenge_goal)
    {
        $this->container['challenge_goal'] = $challenge_goal;

        return $this;
    }

    /**
     * Gets challenge_current_score
     *
     * @return int
     */
    public function getChallengeCurrentScore()
    {
        return $this->container['challenge_current_score'];
    }

    /**
     * Sets challenge_current_score
     *
     * @param int $challenge_current_score Indicates how many tasks the user already has completed. Use this in combination with challenge_goal to render a nice progress bar.
     *
     * @return $this
     */
    public function setChallengeCurrentScore($challenge_current_score)
    {
        $this->container['challenge_current_score'] = $challenge_current_score;

        return $this;
    }

    /**
     * Gets challenge_icon
     *
     * @return string
     */
    public function getChallengeIcon()
    {
        return $this->container['challenge_icon'];
    }

    /**
     * Sets challenge_icon
     *
     * @param string $challenge_icon In the admin panel you can set a string representing an image. This can be a URL, but it can also be an image or texture that you have in your games asset database.
     *
     * @return $this
     */
    public function setChallengeIcon($challenge_icon)
    {
        $this->container['challenge_icon'] = $challenge_icon;

        return $this;
    }

    /**
     * Gets challenge_icon_hd
     *
     * @return string
     */
    public function getChallengeIconHd()
    {
        return $this->container['challenge_icon_hd'];
    }

    /**
     * Sets challenge_icon_hd
     *
     * @param string $challenge_icon_hd This is the HD variant of the challenge icon image. If you have a game, that runs on multiple platforms that could come in handy. Otherwise just leave blank.
     *
     * @return $this
     */
    public function setChallengeIconHd($challenge_icon_hd)
    {
        $this->container['challenge_icon_hd'] = $challenge_icon_hd;

        return $this;
    }

    /**
     * Gets repeatable
     *
     * @return bool
     */
    public function getRepeatable()
    {
        return $this->container['repeatable'];
    }

    /**
     * Sets repeatable
     *
     * @param bool $repeatable If this challenge can be only activated once per user this will be false. Otherwise this challenge will always be added to list of available challenges (see personal or alliance challenges).
     *
     * @return $this
     */
    public function setRepeatable($repeatable)
    {
        $this->container['repeatable'] = $repeatable;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Indicates the status of the challenge. This can be one of the following unlock: Challenge does not track anything. in-progress: Challenge is active and tracking. overtime: User did not manage to finish the challenge in time. unclaimed: The challenge has been completed but the reward has not yet been claimed. finished: The challenge has been successfully be completed and the reward has been claimed
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_claimed
     *
     * @return bool
     */
    public function getIsClaimed()
    {
        return $this->container['is_claimed'];
    }

    /**
     * Sets is_claimed
     *
     * @param bool $is_claimed If the challenge reward has been claimed this is true otherwise its false.
     *
     * @return $this
     */
    public function setIsClaimed($is_claimed)
    {
        $this->container['is_claimed'] = $is_claimed;

        return $this;
    }

    /**
     * Gets user_challenge_unlocked_at
     *
     * @return string
     */
    public function getUserChallengeUnlockedAt()
    {
        return $this->container['user_challenge_unlocked_at'];
    }

    /**
     * Sets user_challenge_unlocked_at
     *
     * @param string $user_challenge_unlocked_at This is the timestamp the challenge has been unlocked.
     *
     * @return $this
     */
    public function setUserChallengeUnlockedAt($user_challenge_unlocked_at)
    {
        $this->container['user_challenge_unlocked_at'] = $user_challenge_unlocked_at;

        return $this;
    }

    /**
     * Gets user_challenge_activated_at
     *
     * @return string
     */
    public function getUserChallengeActivatedAt()
    {
        return $this->container['user_challenge_activated_at'];
    }

    /**
     * Sets user_challenge_activated_at
     *
     * @param string $user_challenge_activated_at This is the timestamp the challenge has been activated.
     *
     * @return $this
     */
    public function setUserChallengeActivatedAt($user_challenge_activated_at)
    {
        $this->container['user_challenge_activated_at'] = $user_challenge_activated_at;

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