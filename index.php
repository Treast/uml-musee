<?php
/**
 * Swagger Petstore
 * @version 1.0.0
 */
use Slim\Http\Request;
use Slim\Http\Response;
require_once __DIR__ . '/vendor/autoload.php';
$app = new Slim\App();
/**
 * GET getAtmosphereCollection
 * Summary: Find all atmospheres
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/atmospheres', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getAtmosphereCollection as a GET method ?');
    return $response;
});
/**
 * GET getAtmosphereItem
 * Summary: Find Atmosphere by ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/atmospheres/{atmosphereId}', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getAtmosphereItem as a GET method ?');
    return $response;
});
/**
 * POST postAtmosphereItem
 * Summary: Create Atmosphere object
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/api/atmospheres', function(Request $request, Response $response, array $args) {
    $body = $request->getParsedBody();
    $response->write('How about implementing postAtmosphereItem as a POST method ?');
    return $response;
});
/**
 * GET getBaladeCollectionByFlaneur
 * Summary: Find balades by Flaneur ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/balades/findByFlaneur/{flaneurId}', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getBaladeCollectionByFlaneur as a GET method ?');
    return $response;
});
/**
 * GET getBaladeItem
 * Summary: Find balade by ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/balades/{baladeId}', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getBaladeItem as a GET method ?');
    return $response;
});
/**
 * POST postBaladeItem
 * Summary: Create a Balade
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/api/balades', function(Request $request, Response $response, array $args) {
    $body = $request->getParsedBody();
    $response->write('How about implementing postBaladeItem as a POST method ?');
    return $response;
});
/**
 * GET getFlaneurItemByCredentials
 * Summary: Find flaneur by credentials
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/flaneurs/{flaneurLogin}/{flaneurMotPasse}', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getFlaneurItemByCredentials as a GET method ?');
    return $response;
});
/**
 * GET getOeuvreCollection
 * Summary: Find all oeuvres
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/oeuvres', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getOeuvreCollection as a GET method ?');
    return $response;
});
/**
 * GET getOeuvreItem
 * Summary: Find oeuvre by ID
 * Notes:
 * Output-Formats: [application/json]
 */
$app->GET('/api/oeuvres/{oeuvreId}', function(Request $request, Response $response, array $args) {
    $response->write('How about implementing getOeuvreItem as a GET method ?');
    return $response;
});
/**
 * POST postOeuvreItem
 * Summary: Create Oeuvre object
 * Notes:
 * Output-Formats: [application/json]
 */
$app->POST('/api/oeuvres', function(Request $request, Response $response, array $args) {
    $body = $request->getParsedBody();
    $response->write('How about implementing postOeuvreItem as a POST method ?');
    return $response;
});
$app->run();