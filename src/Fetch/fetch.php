<?php

namespace Fetch;

use GuzzleHttp\Client;

function fetch(string $input, array $init = NULL)
{
  $client = new Client;
  $response = $client->request(
    $init['method'] ?? 'GET',
    $input,
    $init ? array_diff_key($init, [
      'method' => FALSE,
    ]) : []
  );
  return new Response($response);
}
