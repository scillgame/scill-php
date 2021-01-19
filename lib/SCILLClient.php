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
     * @return \SCILL\Api\AuthApi
     */
    public function getAuthClient()
    {
        if (!$this->authClient) {
            $config = new \SCILL\Configuration();
            $config->setAccessToken($this->apiKey);
            $config->setHost($this->createHostName("us"));

            $this->authClient = new \SCILL\Api\AuthApi(null, $config);
        }
        return $this->authClient;
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
     * @return \SCILL\Api\ChallengesApi
     */
    public function getChallengesClient()
    {
        if (!$this->challengesClient) {
            $config = new \SCILL\Configuration();
            $config->setAccessToken($this->apiKey);
            $config->setHost($this->createHostName("pcs"));

            $this->challengesClient = new \SCILL\Api\ChallengesApi(null, $config);
        }
        return $this->challengesClient;
    }

	/**
	* Returns a preconfigured client api instance for working with battle passes
	* @return \SCILL\Api\BattlePassesApi
	*/
	public function getBattlePassesApi()
	{
	 if (!$this->battlePassesClient) {
	     $config = new \SCILL\Configuration();
	     $config->setAccessToken($this->apiKey);
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
