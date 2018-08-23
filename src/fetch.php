<?php

if (!function_exists('fetch')) {
  function fetch(string $input, array $init = NULL)
  {
    return Fetch\fetch($input, $init);
  }
}
