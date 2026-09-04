# URI Extension
``uri`` is an extension that provides APIs to securely parse and modify URI and URL according to the RFC 3986 and ``WHATWG`` URL standards. It is powered by the ``uriparser``, RFC 3986, and ``Lexbor``, ``WHATWG URL``, libraries. It offers the ``uri`` class.

This extension is meant to replace the ``parse_url()`` function. It also provides two ways to manipulate, parse and produce URLs, which were not available until PHP 8.5.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-extension.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-extension.html","name":"URI Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 14:36:03 +0000","dateModified":"Thu, 03 Sep 2026 14:36:03 +0000","description":"uri is an extension that provides APIs to securely parse and modify URI and URL according to the RFC 3986 and WHATWG URL standards","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-extension.html"]}],"keywords":["extension","http","rfc","url"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.uri.php"},{"@type":"CreativeWork","name":"WHATWG","url":"https:\/\/en.wikipedia.org\/wiki\/WHATWG"},{"@type":"CreativeWork","name":"RFC-3986","url":"https:\/\/tools.ietf.org\/html\/rfc3986"},{"@type":"CreativeWork","name":"PHP 8.5 enables secure URI and URL parsing","url":"https:\/\/www.infoworld.com\/article\/4094261\/php-8-5-enables-secure-uri-and-url-parsing.html"},{"@type":"CreativeWork","name":"New Classes and Interfaces","url":"https:\/\/www.php.net\/manual\/en\/migration85.new-classes.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"uri-extension"}]}]}</script>
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

+ [Universal Resource Identifier (URI)](uri.html)
+ [Universal Resource Locator (URL)](url.html)
+ [URI Class](uri-class.html)

## Related packages

+ [league/uri](https://packagist.org/packages/league/uri)
