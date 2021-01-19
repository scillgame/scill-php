<?php

require_once('./vendor/autoload.php');

$scillClient = new \SCILL\SCILLClient('XnY,-AV+7dNGwrp!fVmP;96xAZ~,sqXJ]]8Htd4U[F', true);
$eventsApi = $scillClient->getEventsClient();

try {
    $result = $scillClient->sendEvent('instant-death', '12345', '1234', array(
        "amount" => 1,
        "character_name" => "Soldier"
    ));
} catch(\SCILL\ApiException $exception) {
    echo("Error: ".$exception->getMessage());
}

//$result = $scillClient->getEventsClient()->sendEvent($payload)->getStatus();
echo($result->getStatus());
