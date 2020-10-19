<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/generate-access-token', function (Request $request, Response $response) {

        // In this example we expect that the client sends us a session id that we decode to receive a user id
        // This could also be a JWT token or a Steam Session. Whatever it is, it's your job to receive an encoded
        // user auth from the client, to decode it into a user id
        $params = $request->getQueryParams();
        $userId = null;
        if (!$params || !$params["session"]) {
            $response->getBody()->write('No session provided');
            return $response;
        } else {
            // Decode the session
            $userId = "12346";
        }

        // Create the request to generate an access token
        /** @var \SCILL\SCILLClient $scill */
        $scill = $this->get('scill');

        $payload = new \SCILL\Model\ForeignUserIdentifier();
        $payload->setUserId($userId);

        // Run the request and if everything worked fine we can return the access token to the client
        try {
            $result = $scill->getAuthClient()->generateAccessToken($payload);
            $accessToken = $result->getToken();
            $result = array(
                "success" => true,
                "token" => $accessToken
            );
            $response->getBody()->write(json_encode($result));
        } catch(\SCILL\ApiException $exception) {
            $result = array(
                "success" => false,
                "error" => $exception->getMessage()
            );
            $response->getBody()->write(json_encode($result));
        }
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
