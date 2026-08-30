---
type: "extension"
title: "URI Extension"
description: "``uri`` is an extension that provides APIs to securely parse and modify URI and URL according to the RFC 3986 and WHATWG URL standards."
resource: "https://www.php.net/manual/en/book.uri.php"
tags: ["extension", "http", "rfc", "url"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# URI Extension

``uri`` is an extension that provides APIs to securely parse and modify URI and URL according to the RFC 3986 and WHATWG URL standards. It is powered by the ``uriparser``, RFC 3986, and ``Lexbor``, ``WHATWG URL``, libraries. It offers the ``uri`` class.

This extension is meant to replace the ``parse_url()`` function. It also provides two ways to manipulate, parse and produce URLs, which were not available until PHP 8.5.

```php
<?php

// PHP 8.5 and newer
use Uri\Rfc3986\Uri;

$uri = new Uri('https://php.net/releases/8.5/en.php');
var_dump($uri->getHost());
// string(7) php.net

// PHP 8.4 and older
$components = parse_url('https://php.net/releases/8.4/en.php');
var_dump($components['host']);
// string(7) php.net

?>
```

## Documentation
- [https://www.php.net/manual/en/book.uri.php](https://www.php.net/manual/en/book.uri.php)

## See Also
- [WHATWG](https://en.wikipedia.org/wiki/WHATWG)
- [RFC-3986](https://tools.ietf.org/html/rfc3986)
- [PHP 8.5 enables secure URI and URL parsing](https://www.infoworld.com/article/4094261/php-8-5-enables-secure-uri-and-url-parsing.html)
- [New Classes and Interfaces](https://www.php.net/manual/en/migration85.new-classes.php)

## Related
- [Universal Resource Identifier (URI)](/features/uri.md)
- [Universal Resource Locator (URL)](/features/url.md)
- [URI Class](/features/uri-class.md)

## Details
- Packagist: [league/uri](https://packagist.org/packages/league/uri)

