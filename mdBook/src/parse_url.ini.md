# parse_url()
``parse_url()`` parses a URL string and returns its components as an associative array. The components it extracts are: ``scheme``, ``host``, ``port``, ``user``, ``pass``, ``path``, ``query``, and ``fragment``.

An optional second parameter accepts a ``PHP_URL_*`` constant to return a single component as a string or integer instead of the full array.

``parse_url()`` is deliberately lenient: it does not validate that the URL is well-formed or reachable. It only splits the string according to RFC 3986 syntax. Providing a relative URL or a partial URL will return only the components that are present.

For validation, combine ``parse_url()`` with ``filter_var($url, FILTER_VALIDATE_URL)``. For building URLs, use ``http_build_query()`` for the query string part.
```php
<?php

$url = 'https://user:pass@example.com:8080/path?query=value#section';

$parts = parse_url($url);
print_r($parts);
/**
 * [
 *   scheme   => 'https',
 *   host     => 'example.com',
 *   port     => 8080,
 *   user     => 'user',
 *   pass     => 'pass',
 *   path     => '/path',
 *   query    => 'query=value',
 *   fragment => 'section',
 * ]
 */

$host = parse_url($url, PHP_URL_HOST); // 'example.com'

?>
```

## See Also

+ [RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)
+ [Understanding and Implementing PHP's `parse_url()` Function](https://reintech.io/blog/understanding-implementing-php-parse-url-function)
+ [How to use parse_url() in PHP safely](https://benjamincrozat.com/php-parse-url)

Related : [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Parse](Parse), [parse_str()](parse_str()), [http_build_query()](http_build_query()), [Universal Resource Identifier (URI)](Universal Resource Identifier (URI)), [Validation](Validation), [Anchor](Anchor)
