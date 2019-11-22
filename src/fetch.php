<?php

if (!function_exists('fetch')) {
  function fetch(string $resource, ?array $init = NULL)
  {
    return Fetch\fetch($resource, $init);
  }
}
