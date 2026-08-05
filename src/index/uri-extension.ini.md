# URI Extension
``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards. It is powered by the uriparser, RFC 3986, and Lexbor, WHATWG URL, libraries. It offers the ``uri`` class.

This extension is meant to replace the ``parse_url()`` function. It also provides two ways to manipulate, parse and produce, URL, which was not available until PHP 8.5.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uri-extension.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uri-extension.ini.html","name":"URI Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``uri`` is an extension that provides APIs to securely parse and modify URIs and URLs according to the RFC 3986 and WHATWG URL standards","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/URI Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.uri.php)**
## See Also

+ [WHATWG](https://en.wikipedia.org/wiki/WHATWG)
+ [RFC-3986](https://tools.ietf.org/html/rfc3986)
+ [PHP 8.5 enables secure URI and URL parsing](https://www.infoworld.com/article/4094261/php-8-5-enables-secure-uri-and-url-parsing.html)
+ [New Classes and Interfaces](https://www.php.net/manual/en/migration85.new-classes.php)

## Related

+ [Universal Resource Identifier (URI)](uri.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
+ [URI Class](uri-class.ini.html)

## Related packages

+ [league/uri](https://packagist.org/packages/league/uri)
