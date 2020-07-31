<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Plugins\NavigationTimings\NavigationTimings;
use Plugins\Base\Base;

$shortopts = "u:";
$longopts = ["url:"];

$options = getopt($shortopts, $longopts);

if (!isset($options["u"]) && !isset($options["url"]))
{
    die("You must provide catcher URL using -u or --url parameter".PHP_EOL);
}

$catcherUrl = $options["u"] ?? $options["url"];

$nt = new NavigationTimings();
$b = new Base();

$requestData = array_merge(
        $nt->getMetrics(),
        $b->getMetrics()
);

try {
    $client = new Client();

    $r = $client->post( $catcherUrl, ['form_params' => $requestData]);
    $body = (string) $r->getBody();

} catch (RequestException $e) {
    echo Psr7\str($e->getRequest());
    if ($e->hasResponse()) {
        echo Psr7\str($e->getResponse());
    }
}
