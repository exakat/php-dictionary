---
type: "PHP Feature"
title: "parse_url()"
description: "``parse_url()`` parses a URL string and returns its components as an associative array."
resource: "https://www.php.net/manual/en/function.parse-url.php"
tags: ["native function", "url", "string", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/function.parse-url.php](https://www.php.net/manual/en/function.parse-url.php)

## See Also
- [RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)
- [Understanding and Implementing PHP's `parse_url()` Function](https://reintech.io/blog/understanding-implementing-php-parse-url-function)
- [How to use parse_url() in PHP safely](https://benjamincrozat.com/php-parse-url)

## Related
- [Universal Resource Locator (URL)](/features/url.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Parse](/features/parse.md)
- [parse_str()](/features/parse_str.md)
- [http_build_query()](/features/http_build_query.md)
- [Universal Resource Identifier (URI)](/features/uri.md)
- [Validation](/features/validation.md)
- [Anchor](/features/anchor.md)

