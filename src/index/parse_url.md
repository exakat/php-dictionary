# parse\_url()
``parse_url()`` parses a URL string and returns its components as an associative array. The components it extracts are: ``scheme``, ``host``, ``port``, ``user``, ``pass``, ``path``, ``query``, and ``fragment``.

An optional second parameter accepts a ``PHP_URL_*`` constant to return a single component as a string or integer instead of the full array.

``parse_url()`` is deliberately lenient: it does not validate that the URL is well-formed or reachable. It only splits the string according to RFC 3986 syntax. Providing a relative URL or a partial URL will return only the components that are present.

For validation, combine ``parse_url()`` with ``filter_var($url, FILTER_VALIDATE_URL)``. For building URLs, use ``http_build_query()`` for the query string part.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_url.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_url.html","name":"parse_url()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``parse_url()`` parses a URL string and returns its components as an associative array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_url().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parse_url"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.parse-url.php)**
## See Also

+ [RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)
+ [Understanding and Implementing PHP's `parse_url()` Function](https://reintech.io/blog/understanding-implementing-php-parse-url-function)
+ [How to use parse_url() in PHP safely](https://benjamincrozat.com/php-parse-url)

## Related

+ [Universal Resource Locator (URL)](url.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Parse](parse.html)
+ [parse\_str()](parse_str.html)
+ [http\_build\_query()](http_build_query.html)
+ [Universal Resource Identifier (URI)](uri.html)
+ [Validation](validation.html)
+ [Anchor](anchor.html)
