# http\_build\_query()
The ``http_build_query()`` native function is used to generate a URL-encoded query string from an associative array or an object. This is commonly used to build query strings for HTTP GET requests or for use in URLs.

``http_build_query()`` converts automatically backed enumerations to their type value, integer or string, when they are used as values in the array. This is a PHP 8.4 feature.

``http_build_query()`` provides arguments to deal with numeric keys, a prefix may be added, with custom separators and encoding type. 

The reverse function for ``http_build_query()`` is ``parse_str()``, which converts a query string into an array.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http_build_query.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http_build_query.html","name":"http_build_query()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:58:18 +0000","dateModified":"Fri, 03 Jul 2026 07:58:18 +0000","description":"The http_build_query() native function is used to generate a URL-encoded query string from an associative array or an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http_build_query().html"]}],"keywords":["native function","http"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_str.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anchor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.http-build-query.php"},{"@type":"CreativeWork","name":"Mastering PHP's `http_build_query()` Function for URL Manipulation","url":"https:\/\/reintech.io\/blog\/mastering-php-http-build-query-function"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"http_build_query"}]}]}</script>
```php
<?php

    enum A: int {
        case A = 1;
    }
    
    print http_build_query(['x' => A::A, 'b' => 3]);
    //    x=1&b=3

?>
```

**[Documentation](https://www.php.net/manual/en/function.http-build-query.php)**
## See Also

+ [Mastering PHP's `http_build_query()` Function for URL Manipulation](https://reintech.io/blog/mastering-php-http-build-query-function)

## Related

+ [Enumeration (enum)](enum.html)
+ [Backed Enum](backed-enum.html)
+ [parse\_str()](parse_str.html)
+ [Anchor](anchor.html)
+ [parse\_url()](parse_url.html)
+ [Separator](separator.html)
+ [Universal Resource Locator (URL)](url.html)
