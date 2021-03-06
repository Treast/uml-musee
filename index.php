<?php
/**
 * Swagger Petstore
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * GET getAtmosphereCollection
 * Summary: Find all atmospheres
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/api/atmospheres', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getAtmosphereCollection as a GET method ?');
            return $response;
            });


/**
 * GET getAtmosphereItem
 * Summary: Find Atmosphere by ID
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/api/atmospheres/{atmosphereId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getAtmosphereItem as a GET method ?');
            return $response;
            });


/**
 * POST postAtmosphereItem
 * Summary: Create Atmosphere object
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->POST('/api/atmospheres', function($request, $response, $args) {
            
            
            
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
$app->GET('/api/balades/findByFlaneur/{flaneurId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getBaladeCollectionByFlaneur as a GET method ?');
            return $response;
            });


/**
 * GET getBaladeItem
 * Summary: Find balade by ID
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/api/balades/{baladeId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getBaladeItem as a GET method ?');
            return $response;
            });


/**
 * POST postBaladeItem
 * Summary: Create a Balade
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->POST('/api/balades', function($request, $response, $args) {
            
            
            
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
$app->GET('/api/flaneurs/{flaneurLogin}/{flaneurMotPasse}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getFlaneurItemByCredentials as a GET method ?');
            return $response;
            });


/**
 * GET getOeuvreCollection
 * Summary: Find all oeuvres
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/api/oeuvres', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getOeuvreCollection as a GET method ?');
            return $response;
            });


/**
 * GET getOeuvreItem
 * Summary: Find oeuvre by ID
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/api/oeuvres/{oeuvreId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getOeuvreItem as a GET method ?');
            return $response;
            });


/**
 * POST postOeuvreItem
 * Summary: Create Oeuvre object
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->POST('/api/oeuvres', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing postOeuvreItem as a POST method ?');
            return $response;
            });



$app->run();
