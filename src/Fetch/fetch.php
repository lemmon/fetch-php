<?php

namespace Fetch;

use GuzzleHttp\Client;

function fetch(string $resource, ?array $init = NULL)
{
  $client = new Client;
  try {
    $response = $client->request(
      $init['method'] ?? 'GET',
      $resource,
      $init ? array_diff_key($init, [
        'method' => FALSE,
      ]) : []
    );
  } catch (\Exception $e) {
    $response = $e->getResponse();
  } finally {
    return new Response($response);
  }
}
