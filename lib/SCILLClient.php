<?php

namespace SCILL;

use SCILL\Model\EventPayload;
use SCILL\Model\ForeignUserIdentifier;

class SCILLClient {
    private $authClient;
    private $eventsClient;
    private $challengesClient;
    private $battlePassesClient;
    private $apiKey;
    private $environment;

    /**
     * SCILLClient constructor.
     * @param string $apiKey The API key (see Admin Panel)
     * @param false $development Set to true if you want to work with our development environment
     */
    public function __construct($apiKey, $development = false) {
        $this->apiKey = $apiKey;
        $this->environment = $development ? '-dev' : '';
    }

    /**
     * Creates the host URL for a microservice and a production or dev environment
     * @param string $microservice Can be ws, pcs, ep or es
     * @return string
     */
    private function createHostName($microservice) {
        return "https://{$microservice}{$this->environment}.scillgame.com";
    }

    /**
     * Returns a preconfigured client api instance for authorizing clients
     * @param string $accessToken The access token created with AuthApi::generateAccessToken
     * @see AuthApi::generateAccessToken
     * @return \SCILL\Api\AuthApi
     */
    public function getAuthClient($accessToken = null)
    {
    	if ($accessToken) {
		    $config = new \SCILL\Configuration();
		    $config->setAccessToken($accessToken ? $accessToken : $this->apiKey);
		    $config->setHost($this->createHostName("us"));
		    $config->setApiKey("api_key", "access_token");
		    return new \SCILL\Api\AuthApi(null, $config);
	    } else {
		    if (!$this->authClient) {
                $config = new \SCILL\Configuration();
                $config->setAccessToken($accessToken ? $accessToken : $this->apiKey);
                $config->setHost($this->createHostName("us"));

                $this->authClient = new \SCILL\Api\AuthApi(null, $config);
            }
            return $this->authClient;
	    }
    }

    /**
     * Returns a preconfigured client api instance for sending events
     * @return \SCILL\Api\EventsApi
     */
    public function getEventsClient()
    {
        if (!$this->eventsClient) {
            $config = new \SCILL\Configuration();
            $config->setAccessToken($this->apiKey);
            $config->setHost($this->createHostName("ep"));

            $this->eventsClient = new \SCILL\Api\EventsApi(null, $config);
        }
        return $this->eventsClient;
    }

	/**
	 * Returns a preconfigured client api instance for working with challenges
	 * @param string $accessToken Access token, previously generated with the AuthApi::generateAccessToken function
	 * @return \SCILL\Api\ChallengesApi
	 */
    public function getChallengesClient($accessToken)
    {
        if (!$this->challengesClient) {
            $config = new \SCILL\Configuration();
            $config->setAccessToken($accessToken);
            $config->setHost($this->createHostName("pcs"));

            $this->challengesClient = new \SCILL\Api\ChallengesApi(null, $config);
        }
        return $this->challengesClient;
    }

	/**
	* Returns a preconfigured client api instance for working with battle passes
    * @param string $accessToken Access token, previously generated with the AuthApi::generateAccessToken function
	* @return \SCILL\Api\BattlePassesApi
	*/
	public function getBattlePassesClient($accessToken)
	{
	 if (!$this->battlePassesClient) {
	     $config = new \SCILL\Configuration();
	     $config->setAccessToken($accessToken);
	     $config->setHost($this->createHostName("es"));

	     $this->battlePassesClient = new \SCILL\Api\BattlePassesApi(null, $config);
	 }
	 return $this->battlePassesClient;
	}

    /**
     * Operation sendEvent
     *
     * Post an event.
     *
     * @param string $eventName The event name
     * @param string $userId A user id
     * @param string $sessionId A Session ID
     * @param array $metaData An array with additional information.
     * @param string $eventType Can be single or group. Defaults to single event
     * @return Model\ActionResponse
     * @throws ApiException on non-2xx responses
     */
    public function sendEvent($eventName, $userId, $sessionId, $metaData = array(), $eventType ='single') {
        $payload = new EventPayload();
        $payload->setEventName($eventName);
        $payload->setUserId($userId);
        $payload->setSessionId($sessionId);
        $payload->setMetaData($metaData);
        return $this->getEventsClient()->sendEvent($payload);
    }
}
