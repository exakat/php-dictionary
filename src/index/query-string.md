# Query String
The query string is a part of a URL that contains data and parameters to be passed to a web server. It is typically located at the end of a URL and starts with a question mark ``?``, followed by key-value pairs separated by ampersands ``&``. 

The values passed in the query string are available in the ``$_GET`` superglobal array. The keys of this array correspond to the names of the parameters in the query string, and the values are the corresponding values passed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query-string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query-string.html","name":"Query String","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"The query string is a part of a URL that contains data and parameters to be passed to a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query-string.html"]}],"keywords":["web","url"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_str.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Query_string"},{"@type":"CreativeWork","name":"PHP query string parser vulnerability","url":"https:\/\/medium.com\/@nyomanpradipta120\/php-query-string-parser-vulnerability-cc6f0a8b206"},{"@type":"CreativeWork","name":"Dealing with HTTP (Url) Query Strings in PHP","url":"https:\/\/www.crwlr.software\/blog\/dealing-with-http-url-query-strings-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"query-string"}]}]}</script>
```php
<?php

    // https://www.example.com/index.php?x=1
    
    print_r($_GET);
    Array(
        [x] => 1
    )

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Query_string)**
## See Also

+ [PHP query string parser vulnerability](https://medium.com/@nyomanpradipta120/php-query-string-parser-vulnerability-cc6f0a8b206)
+ [Dealing with HTTP (Url) Query Strings in PHP](https://www.crwlr.software/blog/dealing-with-http-url-query-strings-in-php)

## Related

+ [Universal Resource Locator (URL)](url.html)
+ [$\_GET]($_get.html)
+ [Query](query.html)
+ [parse\_str()](parse_str.html)

## Related packages

+ [crwlr/query-string](https://packagist.org/packages/crwlr/query-string)
+ [league/uri-interfaces](https://packagist.org/packages/league/uri-interfaces)
+ [league/uri](https://packagist.org/packages/league/uri)
+ [spatie/query-string](https://packagist.org/packages/spatie/query-string)
