<?php

namespace Fetch;

use GuzzleHttp\Client;

function fetch(string $input, array $init = NULL)
{
  $client = new Client;
  if (isset($init['body']) and is_array($init['body'])) {
    $init['body'] = json_encode($init['body']);
  }
  $response = $client->request(
    $init['method'] ?? 'GET',
    $input,
    $init ? array_diff_key($init, [
      'method' => FALSE,
    ]) : []
  );
  return new Response($response);
}
