<?php
/**
 * Swagger Petstore
 * @version 1.0.0
 */
use Slim\Http\Request;
use Slim\Http\Response;
require_once __DIR__ . '/vendor/autoload.php';
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new Slim\App($c);
$em = require_once join(DIRECTORY_SEPARATOR, [__DIR__, "bootstrap.php"]);
/**
 * GET getAtmosphereCollection
 * Summary: Find all atmospheres
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/atmospheres', function(Request $request, Response $response, array $args) use ($em) {
    $atmospheres = $em->getRepository('\Models\Atmosphere')->findAll();

    return $response->withJson($atmospheres);
});
/**
 * GET getAtmosphereItem
 * Summary: Find Atmosphere by ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/atmospheres/{atmosphereId}', function(Request $request, Response $response, array $args) use ($em) {
    $atmosphere = $em->getRepository('\Models\Atmosphere')->find($args['atmosphereId']);
    return $response->withJson($atmosphere);
});
/**
 * POST postAtmosphereItem
 * Summary: Create Atmosphere object
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/api/atmospheres', function(Request $request, Response $response, array $args) use ($em) {
    $body = $request->getParsedBody();
    $atmosphere = new \Models\Atmosphere();
    $atmosphere->setNom($body['nom']);
    $em->persist($atmosphere);
    $em->flush();
    return $response->withStatus(200);
});
/**
 * GET getBaladeCollectionByFlaneur
 * Summary: Find balades by Flaneur ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/balades/findByFlaneur/{flaneurId}', function(Request $request, Response $response, array $args) use ($em) {
    $balades = $em->getRepository('Models\Balade')->findByFlaneurId($args['flaneurId']);
    return $response->withJson($balades);
});
/**
 * GET getBaladeItem
 * Summary: Find balade by ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/balades/{baladeId}', function(Request $request, Response $response, array $args) use ($em) {
    $balade = $em->getRepository('Models\Balade')->find($args['baladeId']);
    return $response->withJson($balade);
});
/**
 * POST postBaladeItem
 * Summary: Create a Balade
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/api/balades', function(Request $request, Response $response, array $args) use ($em) {
    $body = $request->getParsedBody();
    $balade = new \Models\Balade();
    $balade->setNom($body['nom']);
    $balade->setAtmosphereId($body['atmosphereId']);
    $balade->setDescription($body['description']);
    $balade->setFlaneurId($body['flaneurId']);
    $balade->setDateRealisation($body['dateRealisation']);
    $em->persist($balade);
    $em->flush();

    return $response;
});
/**
 * GET getFlaneurItemByCredentials
 * Summary: Find flaneur by credentials
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/flaneurs/{flaneurLogin}/{flaneurMotPasse}', function(Request $request, Response $response, array $args) use ($em) {
    $flaneur = $em->getRepository('Models\Flaneur')->findByLogin($args['flaneurLogin']);
    if($flaneur && $flaneur->getMotPasse() === $args['flaneurMotPasse']) {
        return $response->withStatus(200);
    }
    return $response->withStatus(403);
});
/**
 * GET getOeuvreCollection
 * Summary: Find all oeuvres
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/oeuvres', function(Request $request, Response $response, array $args) use ($em) {
    $oeuvres = $em->getRepository('Models\Oeuvre')->findAll();
    return $response->withJson($oeuvres);
});
/**
 * GET getOeuvreItem
 * Summary: Find oeuvre by ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/oeuvres/{oeuvreId}', function(Request $request, Response $response, array $args) use ($em) {
    $oeuvre = $em->getRepository('Models\Oeuvre')->find($args['oeuvreId']);
    return $response->withJson($oeuvre);
});
/**
 * POST postOeuvreItem
 * Summary: Create Oeuvre object
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/api/oeuvres', function(Request $request, Response $response, array $args) use ($em) {
    $body = $request->getParsedBody();
    $oeuvre = new \Models\Oeuvre();
    $oeuvre->setNom($body['nom']);
    $oeuvre->setDescription($body['description']);
    $oeuvre->setAnnee($body['annee']);
    $oeuvre->setMusee($body['musee']);
    $oeuvre->setArtiste($body['artiste']);
    return $response->withStatus(200);
});
$app->run();