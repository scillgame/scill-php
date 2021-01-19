<?php

require_once('./vendor/autoload.php');

$appId = "597737952688570369";

$scillClient = new \SCILL\SCILLClient('ai728S-1aSdgb9GP#R]Po[P!1Z(HSSTpdULDMUAlYX', false);
try {
    $result = $scillClient->sendEvent('instant-death', '12345', '1234', array(
        "amount" => 1,
        "character_name" => "Soldier"
    ));
} catch(\SCILL\ApiException $exception) {
    echo("Error: ".$exception->getMessage());
}

//$result = $scillClient->getEventsClient()->sendEvent($payload)->getStatus();
echo("Event sent status: ".$result->getStatus()."\n");
echo("------------------------------------------------------------------\n");

$authApi = $scillClient->getAuthClient();
$id = new \SCILL\Model\ForeignUserIdentifier(array(
	"user_id" => "1234"
));
$auth = $authApi->generateAccessToken($id);
$accessToken = $auth->getToken();
echo("Auth-Token: ".$accessToken."\n");
echo("------------------------------------------------------------------\n");

echo("Available Challenges"."\n");
$challengesApi = $scillClient->getChallengesClient($accessToken);
$categories = $challengesApi->getPersonalChallenges($appId);
foreach ($categories as $category) {
	echo("Category: ".$category->getCategoryName()."\n");
	foreach($category->getChallenges() as $challenge) {
		echo("Challenge: ".$challenge->getChallengeName()."\n");
	}
}
echo("------------------------------------------------------------------\n");

echo("Active Challenges"."\n");
try
{
	$categories = $challengesApi->getActivePersonalChallenges($appId);
	foreach ($categories as $category) {
		echo("Category: ".$category->getCategoryName()."\n");
		foreach($category->getChallenges() as $challenge) {
			echo("Challenge: ".$challenge->getChallengeName()."\n");
		}
	}
} catch (\SCILL\ApiException $e)
{
	echo("Error calling active challenges"."\n");
}

echo("------------------------------------------------------------------\n");

echo("Available Battle Passes"."\n");
$battlePassApi = $scillClient->getBattlePassesClient($accessToken);
$battlePasses = $battlePassApi->getBattlePasses($appId);
foreach ($battlePasses as $battlePass) {
	echo("Battle-Pass: ".$battlePass->getBattlePassName()."\n");
}
echo("------------------------------------------------------------------\n");
