Fetch, simple PHP HTTP client
=============================

Fetch is a tiny function, wrapped around Guzzle, PHP HTTP client. Inspired by Web API fetch() function.

## Examples

```php
// plain GET request
$res = fetch('http://uuid.lemmonjuice.com/');
$body = $res->body(); // returns response body
// get JSON data
$json = fetch('http://uuid.lemmonjuice.com/', [
  'headers' => [
    'Accept' => 'application/json',
  ],
])->json();
// POST data
$res = fetch('http://httpbin.org/post', [
  'method' => 'POST',
  'headers' => [
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
  ],
  'json' => [
    'hello' => 'world',
  ],
]);
```

## Installing Fetch

```bash
composer require lemmon/fetch
```

## API

```php
Fetch\Response fetch(string $input, array $init = NULL)
```

### Parameters

- `$input` - a resource that you wish to fetch *(e.g. http://httpbin.org/post)*
- `$init` (optional) - options array; see Guzzle's [Request Options](http://docs.guzzlephp.org/en/stable/request-options.html) documentation page for more info about available parameters; note: use additional parameter `method` to define request method; default method is GET

### Response

- `ok()` - (bool) has response been successful
- `status()` - (int) status code
- `statusText()` - (string) status text
- `body()` - (string) response body
- `json(bool $assoc = FALSE)` - JSON parsed response body
- `psr()` - (GuzzleHttp\Psr7\Response) Guzzle's PSR-7 response (read more in Guzzle's [official documentation](http://docs.guzzlephp.org/en/stable/psr7.html#responses))

## Read more

- [Guzzle][Guzzle] - HTTP client that makes it easy to send HTTP requests and trivial to integrate with web services
- [PSR-7][PSR7] - HTTP message interfaces
- [fetch()][fetch] - Web API fetch()

## License

[MIT](https://tldrlegal.com/license/mit-license)

[Guzzle]: https://github.com/guzzle/guzzle
[PSR7]: https://www.php-fig.org/psr/psr-7/
[fetch]: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/fetch
